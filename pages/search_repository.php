<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository</title>
    <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png" />
    <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/searchrepository.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
        <a class="navbar-brand ms-5" href="#">
            <h5>Research<span class="text-primary">Hub</span></h5>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">Contact</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./search_repository.php">Repository</a>
                </li>
            </ul>

            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link" href="../scripts/authentication/logout.php">
                        <img src="../assets/img/icons/logout.svg" alt="logout button" height="25" />
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="container-fluid mb-5">
            <div class="d-inline" id="browse">
                <h3 class="text-black d-inline">Browse Researches</h3>
            </div>
            <div class="d-inline"><input type="text" placeholder="Search Researches">
                <a class="btn btn-primary" href="./upload.php">upload</a>
            </div>
        </div>

        <div class="row container-fluid">
            <div class="col-md-3 mb-4">
                <div class="card" >
                    <img src="../assets/img/logo/logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <a href="#" class="btn btn-primary">View</a>
                    </div>
                  </div>
            </div>
    </div>
</body>

</html>