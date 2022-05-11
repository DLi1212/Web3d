<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Diplomata+SC&family=Kalam&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../application/css/custom.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <title> Coca cola 3D APP template</title>
</head>

<body id="body">
    <!-- header -->
    <nav id="header" class="navbar sticky-top navbar-expand-md navbar_coca_cola">
        <div class="container-fluid">
            
            <div class="logo">
                <a class="navbar-brand" href="Home">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Museum</h3>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navAbout" class="nav-link" href="about" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="There are some descriptions of the production process.">About</a>
                    </li>

                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="models" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke zero, Sprite and Appletiser.">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid main_contents">
        <!--Main body-->
        <div id="home">
            <!-- Main_3D Image or Carousel -->
            <div class="row">
                <div class="col-md-12">
                    <div id="main_3d_image">
                    </div>
                </div>
            </div>
            <br>
            <div class="row ">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-md-4 active">
                            <img id="image1" class="img-fluid mx-auto d-block" alt="img1">
                            <br>
                            <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" class="btn btn-light">Learn more</a>
                        </div>
                        <div class="carousel-item col-md-4">
                            <img id="image2" class="img-fluid mx-auto d-block" alt="img2">
                            <br>
                            <a href="https://www.coca-cola.co.uk/brands/coca-cola-zero-sugar" class="btn btn-light">Learn more</a>
                        </div>
                        <div class="carousel-item col-md-4">
                            <img id="image3" class="img-fluid mx-auto d-block" alt="img3">
                            <br>
                            <a href="https://www.coca-cola.co.uk/brands/appletiser" class="btn btn-light">Learn more</a>
                        </div>
                        <div class="carousel-item col-md-4">
                            <img id="image4" class="img-fluid mx-auto d-block" alt="img4">
                            <br>
                            <a href="https://www.coca-cola.co.uk/brands/dr-pepper" class="btn btn-light">Learn more</a>
                        </div>
                        <div class="carousel-item col-md-4">
                            <img id="image5" class="img-fluid mx-auto d-block" alt="img5">
                            <br>
                            <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-light">Learn more</a>
                        </div>
                        <div class="carousel-item col-md-4">
                            <img id="image6" class="img-fluid mx-auto d-block" alt="img6">
                            <br>
                            <a href="https://www.coca-cola.co.uk/brands/sprite" class="btn btn-light">Learn more</a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br>
            <!-- video -->
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/eOMhOjgNd7Q" allowfullscreen="true" frameborder="1"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
    <!-- footer -->
    <nav id="footer" class="navbar navbar-expand-md footer">
        <div class="container-fluid">
            <div class="navbar-text col-md-4 button">
                <p>
                    <span class="align-baseline"><a href="Home">Home</a> &ensp; <a id="navAbout1" href="#">About</a> &ensp; <a href="#" data-toggle="modal" data-target="#contactModal"> Contact</a> &ensp;<a href="javascript:changeLook()">Restyle</a></span>
                </p>
            </div>
            <div class="navbar-text col-md-4 title">
                <p> &copy Coca Cola Museum</p>
            </div>
            <div class="navbar-text col-md-4 social_bottom">
                <a href="https://github.com/DLi1212/Web3d.git"><i class="fab fa-github fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
            </div>
        </div>
    </nav>

    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">3D App Contact Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>Allen Li, Email: dl348@sussex.ac.uk</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../application/js/jquery.fancybox.min.js"></script>

    <script src="https://kit.fontawesome.com/ddbc7ead4b.js" crossorigin="anonymous"></script>


    <script type="text/javascript" src="../application/js/script.js"></script>
    <script src="../application/js/colorChange.js"></script>

    <script src="../application/js/getJsonData.js"></script>
    <script src="../application/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>