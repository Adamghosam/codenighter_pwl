<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h2>Ghosam_webiste</h2>
            </a>
            <button class="navbar-toggler  type=" button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav " style="margin-left: auto;">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>artikel">Artikel</a>
                    </li>
                    <li>
                        <div class="d-flex">
                            <a class="btn btn-outline-primary" href="<?= base_url(); ?>login">Login</a>

                        </div>

                    </li>
                </ul>



            </div>
        </div>
    </nav>