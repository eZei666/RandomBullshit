<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeamModel;

class TeamController extends BaseController
{
    public function index(): string
    {
        $teamModel = new TeamModel();
        $data['teams'] = $teamModel->findAll(); // Fetch all teams

        return view('header') 
            . view('teams/list', $data) 
            . view('footer');
    }

    public function createTeam()
    {
        return view('teams/add');
    }

    public function storeTeam()
    {
        $teamModel = new TeamModel();
        $imageName = '';

        // Handling the image upload
        if($img = $this->request->getFile('image')) 
        {
            if ($img->isValid() && !$img->hasMoved()) 
            {
                $imageName = $img->getRandomName(); 
                $img->move('uploads/', $imageName); // Moves file to 'uploads/' directory
            }
        }

        // Data to insert into the database
        $data = [
            'image'  => $imageName, 
            'name'     => $this->request->getPost('name'),
            'description'   => $this->request->getPost('description'),
        ];

        // Insert data into the database
        $teamModel->insert($data);

        // Set a flashdata message
        session()->setFlashdata('success', 'Team Added Successfully');

        // Redirect with the flashdata message
        return redirect()->to('/teams');
    }

    public function editTeam($id)
    {
        $teamModel = new TeamModel();
        $data['team'] = $teamModel->find($id);

        return view('teams/edit', $data);
    }

    public function updateTeam($id)
    {
        $teamModel = new TeamModel();
        $existingTeam = $teamModel->find($id);
        $newData = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        // Handle image upload
        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && !$img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
                $newData['image'] = $imageName;
            }
        }

        // Check if data has changed
        $isDataChanged = false;
        foreach ($newData as $key => $value) {
            if ($existingTeam[$key] != $value) {
                $isDataChanged = true;
                break;
            }
        }

        // Update if data has changed
        if ($isDataChanged) {
            $teamModel->update($id, $newData);
            session()->setFlashdata('success', 'Team Updated Successfully');
        } else {
            session()->setFlashdata('info', 'No changes were made.');
        }

        return redirect()->to('/teams');
    }

    public function deleteTeam($id)
    {
        $teamModel = new TeamModel();
        $teamModel->delete($id);

        // Set a flashdata message
        session()->setFlashdata('success', 'Team Deleted Successfully');

        // Redirect to the teams page
        return redirect()->to('/teams');
    }
}
