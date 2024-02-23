<?php
$this->extend('layout/main');
$this->section('body');
?>
<div class="container">
    <h1 class="mb-4">Add Residents</h1>
    <hr>
    <form action="/residents/store" method="POST" enctype="multipart/form-data" class="card p-5 shadow bg-custom zoom-on-hover">
        <!-- Add the bg-custom class for the background color -->
        <div class="mb-3">
            <label for="residentNum" class="form-label"></label>
            <input type="text" class="form-control" name="residentNum" value="<?= $residentNumber; ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="block_#" class="form-label"></label>
            <input type="text" class="form-control" name="residentBlock" placeholder="Block #">
        </div>
        <div class="mb-3">
            <label for="lot_#" class="form-label"></label>
            <input type="text" class="form-control" name="residentLot" placeholder="Lot #">
        </div>
        <div class="mb-3">
            <label for="residentsName" class="form-label"></label>
            <input type="text" class="form-control" name="residentName" placeholder="Residents Name">
        </div>
        <div class="mb-3">
            <label for="residentsAge" class="form-label"></label>
            <input type="text" class="form-control" name="residentAge" placeholder="Residents Age">
        </div>
        <div class="mb-3">
            <label for="residentsAddress" class="form-label"></label>
            <input type="text" class="form-control" name="residentAddress" placeholder="Residents Address">
        </div>
        <div class="mb-3">
            <label for="residentsGender" class="form-label"></label>
            <input type="text" class="form-control" name="residentGender" placeholder="Residents Gender">
        </div>
        <div class="mb-3">
            <label for="residentsEmail" class="form-label"></label>
            <input type="text" class="form-control" name="residentEmail" placeholder="Residents Email">
        </div>
        <div class="mb-3">
            <label for="residentsProfile" class="form-label"></label>
            <input type="file" class="form-control" name="residentProfile" placeholder="Residents Profile">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
</div>
<style>
    body {
        background-color: #222B45;
        grid-gap: 0cap;
    }
    .mb-4 {
        color: #FFF3D3;
    }
    hr {
        color: #FFF3D3;
    }
    .zoom-on-hover:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }
    .bg-custom {
        background-color: #FFF3D3; /* Add your preferred background color */
        color: #222B45;
    }
    .btn-primary {
        background-color: #222B45;
        color: #FFF3D3;
    }
</style>
<?php $this->endSection(); ?>
