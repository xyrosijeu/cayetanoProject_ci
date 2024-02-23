<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residents Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <style>
    body {
        background-color: #222B45;
        color: #222B45;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .navbar-brand {
        color: #FFF3D3;
        font-size: 1.5rem;
    }

    .container {
        width: 100%;
        height: 100px;
        display: grid;
        gap: 20px;
    }

    h1 {
        color: #FFF3D3;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: grid;
        gap: 15px;
    }

    .btn-primary {
        background-color: #222B45;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #222B45;
        transition: ease 0.1s;
        transform: matrix3d(2);
        display: inline-block;
        position: relative;
        border-radius: 27px;
        color: #FFF3D3;
        font: 700 14px/60px "Droid Sans", sans-serif;
        letter-spacing: 0.05em;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        position: relative;
    }


    input,
    textarea,
    select {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="file"] {
        border: none;
        padding: 0;
    }
    </style>
</head>

<body>

    <!-- Main Content -->
    <div class="container">
        <h1>Edit Residents</h1>
        <form action="/residents/update/<?= $resident['id'];?>" method="POST" enctype="multipart/form-data">
            <!-- Your form content goes here -->
            <div class="mb-3">
                <label for="residentNum" class="form-label">Resident Number</label>
                <input type="text" class="form-control" name="residentNum" value="<?;?>" disabled>
            </div>
            <div class="mb-3">
                <label for="block_#" class="form-label">Block #</label>
                <input type="text" class="form-control" name="residentBlock" value="<?= $resident['block_#'];?>">
            </div>
            <div class="mb-3">
                <label for="lot_#" class="form-label">Lot #</label>
                <input type="text" class="form-control" name="residentLot" value="<?= $resident['lot_#'];?>">
            </div>
            <div class="mb-3">
                <label for="residentsName" class="form-label">Residents Name</label>
                <input type="text" class="form-control" name="residentName" value="<?= $resident['residents_name'];?>">
            </div>
            <div class="mb-3">
                <label for="residentsAge" class="form-label">Residents Age</label>
                <input type="text" class="form-control" name="residentAge" value="<?= $resident['residents_age'];?>">
            </div>
            <div class="mb-3">
                <label for="residentsAddress" class="form-label">Residents Address</label>
                <input type="text" class="form-control" name="residentAddress"
                    value="<?= $resident['residents_address'];?>">
            </div>
            <div class="mb-3">
                <label for="residentsGender" class="form-label">Residents Gender</label>
                <input type="text" class="form-control" name="residentGender"
                    value="<?= $resident['residents_gender'];?>">
            </div>
            <div class="mb-3">
                <label for="residentsEmail" class="form-label">Residents Email</label>
                <input type="text" class="form-control" name="residentEmail"
                    value="<?= $resident['residents_email'];?>">
            </div>
            <!-- ... -->
            <div class="mb-3">
                <label for="residentsProfile" class="form-label">Residents Profile</label>
                <input type="file" class="form-control" name="residentProfile"
                    value="<?= $resident['residents_profile'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional, for Bootstrap features like modal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom JS -->
    <script>
    // Add your custom JavaScript here if needed
    </script>
</body>

</html>