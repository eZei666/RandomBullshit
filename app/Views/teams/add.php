<?php 
    $this->extend('layout/main');
    $this->section('body');
?>

<h1>Add Team</h1>
<div class="add-student-container">
    <form action="/teams/store" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3">
                <label for="Name" class="form-label">Team Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="Image" class="form-label"> Profile</label>
                <input type="file" class="form-control" id="Image" name="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <input type="text"  class="form-control" id="Description" name="description" placeholder="" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/teams" class="btn btn-secondary">Cancel</a>
    </form>
</div>


<?php $this->endSection(); ?>