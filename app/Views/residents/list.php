<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residents List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Your custom CSS -->
    <style>
        body {
            background-color: #222B45;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 80%;
            margin-top: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
            gap: 15px;
        }

        h1 {
            color: #FFF3D3;
            margin-bottom: 20px;
            background-color: #222B45;
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
            border-radius: 15px 15px 0 0;
        }

        .btn-add-resident {
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .card-slider {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 15px; /* Set the gap between cards */
            padding-bottom: 15px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.5s ease, box-shadow 0.3s ease, background-color 0.3s ease; /* Added background-color transition */
            width: calc(33.3333% - 15px); /* Set the width of each card to one-third minus the gap */
            box-sizing: border-box;
            background-color: #FFF3D3; /* Set the initial background color */
        }

        .card:hover {
            transform: scale(1.05) translateY(-10px); /* Adjust translateY as needed */
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            z-index: 1;
            background-color: #FFFFE0; /* Change background color on hover */
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            max-height: 250px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.3s ease-out;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-body {
            text-align: center;
            padding: 15px;
        }

        .table-actions {
            white-space: nowrap;
            margin-top: 15px;
        }

        .btn-edit,
        .btn-delete {
            margin-right: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            background-color: #4CAF50;
        }

        .alert {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 300px;
            padding: 15px;
            background-color: #28a745;
            color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .alert-danger {
            background-color: #dc3545;
        }
        .btn-add-resident {
            background-color: #FFF3D3;
            color: #222B45;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <h1>Residents List</h1>
        <a href="/residents/create" class="btn btn-primary btn-add-resident">Add a Resident</a>

        <div class="card-slider">
            <?php foreach ($residents as $resident) : ?>
                <div class="card">
                    <img src="<?= base_url('uploads/' . $resident['residents_profile']); ?>" class="card-img-top" alt="Profile">
                    <div class="card-body">
                        <h5 class="card-title"><?= $resident['residents_name']; ?></h5>
                        <p class="card-text">Block #<?= $resident['block_#']; ?>, Lot #<?= $resident['lot_#']; ?></p>
                        <p class="card-text">Age: <?= $resident['residents_age']; ?></p>
                        <p class="card-text">Gender: <?= $resident['residents_gender']; ?></p>
                        <div class="table-actions">
                            <a href="/residents/edit/<?= $resident['id']; ?>" class="btn btn-primary btn-edit">Edit</a>
                            <a href="/residents/delete/<?= $resident['id']; ?>" class="btn btn-danger btn-delete">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for Bootstrap features like modal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Slick slider JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.card-slider').slick({
                slidesToShow: 3, // Show 3 cards at a time
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000, // Adjust as needed
                responsive: [
                    {
                        breakpoint: 768, // Adjust breakpoints as needed
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
