<?php 
    $this->extend('layout/main');
    $this->section('body');
?>

<h1>Edit Team</h1>
<form action="/teams/update/<?=$team['id'];?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="mb-3">
            <label for="Name" class="form-label">Team Name</label>
            <input type="text" class="form-control" id="Name" name="name" placeholder="Name" value="<?=$team['name'];?>">
        </div>
        <div class="mb-3">
            <label for="Image" class="form-label">Profile</label>
            <input type="file" class="form-control" id="Image" name="image" accept="image/*">
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <input type="text" min="0" class="form-control" id="description" name="description" placeholder="" value="<?=$team['description'];?>" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/teams" class="btn btn-secondary">Cancel</a>
</form>


<?php $this->endSection(); ?>