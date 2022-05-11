<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../application/css/custom.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

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
                        <a class="nav-link" href="home">Home</a>
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
        <div id="about">
            <p>Regarding modelling, the model of Appletiser was built by Cinema 4D (C4D), and the Label part of it was made by Photoshop. Moreover, since the Appletiser bottle contains raised icon, this part was created by Adobe Illustrator as a vector image and realized by using the extrusion tool. Since C4D cannot export VRML files, I imported the model into 3ds Max and exported the VRML files again. The Material of the model after importing into 3ds Max all disappeared, so I had to add it again. In addition, VRML does not support transparent Material, and the model may show the label abnormally when it is rotated on the web.</p>
            <p>The web pages are based on the MVC framework and are made using HTML and CSS. The data (model descriptions and images) are stored in SQLite and called through PHP. The carousel is used for image rotation for the home page. And, the responsive embedded video is added, embedding videos from YouTube directly into my page. For the model part, the fancybox learned in the experiment is still used, but the image call method is changed to read the image URL from SQLite. Besides, AJAX is used to display the descriptions when the model is switched.</p>
            <p>In addition, there were some problems with the use of X3DOM. The original plan was to use asynchronous loading to implement the switching of multiple models. However, after applying it in practice, I found that with version 1.8.2 of x3dom.js, only the model displayed by default could be rotated. The rotate button after switching models did not work properly. If to change x3dom.js to a version before 1.8.2, all three model models can be rotated properly, but the model display on the web will be abnormal. The left column shows the results of x3dom.js before version 1.8.2, while the right column shows the results of x3dom.js before version 1.8.2.</p>
            <br>
            <img src="../application/assets/images/About_problem_images/problem1.png">
            <img src="../application/assets/images/About_problem_images/no_problem1.png">
            <img src="../application/assets/images/About_problem_images/problem2.png">
            <img src="../application/assets/images/About_problem_images/no_problem2.png">
            <br>
            <p>Also, with asynchronous loading and no matter what version of x3dom.js, if the model is rotated and the camera is not switched, or only the camera is switched, the model can be switched normally. If the model is switched after the model is rotated and the camera is switched, X3DOM will get stuck, and the web page will report 'x3dom.js:7 Uncaught TypeError: Cannot read properties of null (reading 'doc') at Object.getProjectionMatrix (x3dom.js:7:696915) at x3dom.Viewarea.getProjectionMatrix (x3dom.js:7:56094) at e.renderScene (x3dom.js:7:211357) at x3dom.X3DDocument.render (x3dom.js:7:284295) at x3dom.X3DCanvas.tick (x3dom.js:7:45890) at e (x3dom.js:7:47125)'. I tried various ways to solve the problem, but I failed. So I had to use JavaScript to switch the model.</p>
            <p>The github link has been added to the github icon in the footer.</p>
        </div>
    </div>

    <br>
    <!-- footer -->
    <nav id="footer" class="navbar navbar-expand-md footer">
        <div class="container-fluid">
            <div class="navbar-text col-md-4 button">
                <p>
                    <span class="align-baseline"><a href="Home">Home</a> &ensp; <a id="navAbout1" href="#">About</a> &ensp; <a href="#" data-toggle="modal" data-target="#contactModal"> Contact</a>&ensp;<a href="javascript:changeLook()">Restyle</a></span>
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

    <script src="../application/js/colorChange.js"></script>
    <script src="../application/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>