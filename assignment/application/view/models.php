<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../application/css/custom.css">

    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- Include the x3dom JavaScript -->
    <title> Coca cola 3D APP template</title>
</head>

<body id="body">
    <!-- The header -->
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

    <!-- The Model -->
    <div class="container-fluid main_contents">
        <div class="modelSpace" id="models">
            <div class="row">
                <div class="col-md-8">
                    <div class="changeModel" id="changeModel">
                        <button type="button" id="CokeZero" class="btn btn-responsive">Coke Zero</button>
                        <button type="button" id="Sprite" class="btn btn-responsive">Sprite</button>
                        <button type="button" id="Appletiser" class="btn btn-responsive">Appletiser</button>
                    </div>
                    <br>
                    <div id="model1">
                        <div class="model3D">
                            <x3d id="wire">
                                <scene>
                                    <inline id="cokeZero" nameSpaceName="model" mapDEFToID="true"></inline>
                                </scene>
                            </x3d>
                        </div>
                    </div>
                    <div id="model2" style="display:none;">
                        <div class="model3D">
                            <x3d id="wire1">
                                <scene>
                                    <inline id="sprite" nameSpaceName="model1" mapDEFToID="true"></inline>
                                </scene>
                            </x3d>
                        </div>
                    </div>
                    <div id="model3" style="display:none;">
                        <div class="model3D">
                            <x3d id="wire2">
                                <scene>
                                    <inline id="appletiser" nameSpaceName="model2" mapDEFToID="true"></inline>
                                </scene>
                            </x3d>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 interaction card" id="interaction">
                    <br>
                    <div class="space card-body">
                        <p> Interaction:</p>
                        <button type="button" class="btn btn-responsive" onclick="spin()">Spin</button>
                        <button type="button" class="btn btn-responsive" onclick="wireFrame()">Wireframe</button>
                        <button type="button" class="btn btn-responsive" onclick="headlight()">Headlight</button>
                        <button type="button" class="btn btn-responsive" onclick="Omnilight()">Omnilight</button>
                        <button type="button" class="btn btn-responsive" onclick="cameraFront()">Front</button>
                        <button type="button" class="btn btn-responsive" onclick="cameraBack()">Back</button>
                        <button type="button" class="btn btn-responsive" onclick="cameraLeft()">Left</button>
                        <button type="button" class="btn btn-responsive" onclick="cameraRight()">Right</button>
                        <button type="button" class="btn btn-responsive" onclick="cameraTop()">Top</button>
                        <button type="button" class="btn btn-responsive" onclick="cameraBottom()">Bottom</button>
                    </div>
                </div>
            </div>

            <div class="gallery row">
                <p> Gallery:</p>
                <div class="row">
                    <div class="col-sm-4">
                        <a id="model_image" data-fancybox data-caption="Coke Zero" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" id="gallery_image" alt="Sprite">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a id="model_image1" data-fancybox data-caption="Sprite" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" id="gallery_image1" alt="Sprite">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a id="model_image2" data-fancybox data-caption="Appletiser" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" id="gallery_image2" alt="Sprite">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="Description">
                    <p> Description:</p>
                    <div class="card">
                        <div class="card-body">
                            <div id="information_body">
                                <p>
                                <div class="card-title drinksText">NAME: </div>
                                <div id="brandName"></div>
                                </p>
                                <p>
                                <div class="card-subtitle drinksText">MODEL DESCRIPTION: </div>
                                <div id="modelDescription"></div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The footer -->


    <nav id="footer" class="navbar navbar-expand-md footer">
        <div class="container-fluid">
            <div class="navbar-text col-md-4 button">
                <p>
                    <span class="align-baseline"><a href="Home">Home</a> &ensp; <a href="about">About</a> &ensp; <a href="#" data-toggle="modal" data-target="#contactModal"> Contact</a> &ensp;<a href="javascript:changeLook()">Restyle</a></span>
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



    <script type='text/javascript' src='../application/js/x3dom.js'></script>


    <!-- JavaScript model interactions -->
    <script src="../application/js/modelInteractions.js"></script>
    <script src="../application/js/modelChange.js"></script>
    <script src="../application/js/colorChange.js"></script>

    <script src="../application/js/getJsonData.js"></script>
    <script src="../application/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>