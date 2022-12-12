<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Jobs</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homepage.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
</style>
    
</head>

<body>
    <header>
        <p id="text-head">Top Jobs</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0;">
            <div class="container-fluid" style="background-color: #E2DEF5;padding: 20px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="javascript:window.location.href=window.location.href">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;"href="Company/controllCompany.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="Client/controllClient.php">English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" 
                            style="color: #FAF7F0; border-radius:1px solid #393E46;background-color:#CD104D;" 
                            href="login.php">SIGN IN</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

    <div class="container-search" style="padding: 20px;background-color: #EEE4C1;">
        <form class="form-inline my-2 my-lg-0" style=" display: flex;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>


    <div class="bodySlideshow">
            <div id="carouselExampleIndicators" class="carousel slide col-12 p-0 mt-3 m-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./Image/slideshow1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./Image/slideshow2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./Image/slideshow3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
    </div>



    <div style="background-color: #C1EBF9;padding-bottom:10px;">
    <div class="container">
        <div class="row gutter" style="width: 100%;">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%;">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card" >
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%;">
                            </div> 
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%;">
                            </div>
                            <button class="btn-view accordion-collapse" name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse" name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%;">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="margin-top: 15px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://bom.so/oPIJ9W" style="width: 100%">
                            </div>
                            <button class="btn-view accordion-collapse"name="btn-view" type="submit">View</button>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example" style="margin-top:15px;">
                    <ul class="pagination" style="justify-content: flex-end;">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
    
    <div class="footer">
        <p style="text-align: center; line-height: 200px; color: black;background-color: #E2DEF5;">Copyright @ Top Jobs 2022</p>
    </div>
    
</body>

</html>