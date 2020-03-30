<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    

    <!-- X3DOM Package -->
    <link rel="stylesheet" type="text/css" href="css/x3dom.css"></link>
    <link rel="stylesheet" type='text/javaScript' href="scripts/js/x3dom.js"></link>
    <script type='text/javaScript' src="http://x3dom.org/x3dom/release/x3dom.js"></script>

    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/42611a5285.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


    <title>Coca Cola Journey 3D App Template</title>
  </head>
  <body id="body">
    <!-- Logo and navigation bar -->
    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <!-- Brand -->
      <div class="logo">
        <a class="navbar-brand" href="index.html">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
        </a>
      </div>
        
      <!-- Collapsible NavBar Menu -->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse ">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Link Menu item button to the links in navbar-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a id="navHome" class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom"
            title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module">About</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item">
            <a id="navModels" class="nav-link" href="#" id="navbardrop" data-toggle="popover" data-trigger="hover"
            data-placement="bottom" title data-content="Three Models: Coke, Sprite and Dr Pepper" data-original-title="X3D Models">
            Models
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
            </li>
          </ul>
      </div>
    </nav>
    <!-- Start of 3D App SPA Contents -->
    <div class="container-fluid main_contents"> 
      <!-- Home Page Content -->
      <div id="home" style="display: block;">
        <div class="row">
          <div class="col-sm-12">
            <div id="main_3d_image">
              <div id="main_text" class="col-xs-12 col-sm-4">
                <div id="title_home"></div>
                <div id="subTitle_home"></div>
                <div id="description_home"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row of Cards on grid -->
        <div class="row">
          <!-- Coca Cola Column -->
          <div class="col-sm-4">
            <div class="card">
              <a href="assets/images/render_images/coke_render.jpg" data-fancybox data-caption="My Coke Can Render" class="thumbnail">
                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
              </a>
              <div class="card-body">
                <div id="title_left" class="card-title homeText"></div>
                <div id="subTitle_left" class="card-subtitle homeText"></div>
                <div id="description_left" class="card-text homeText"></div>
                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" target="_blank" class="btn btn-primary">Find out more...</a>
              </div>
            </div>
          </div>
    
          <!-- Sprite Column -->
          <div class="col-sm-4">
            <div class="card">
              <a href="assets/images/render_images/sprite_render.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="thumbnail">
                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/sprite.jpg" alt="Sprite">
              </a>
              <div class="card-body">
                <div id="title_centre" class="card-title homeText"></div>
                <div id="subTitle_centre" class="card-subtitle homeText"></div>
                <div id="description_centre" class="card-text homeText"></div>
                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" target="_blank" class="btn btn-primary">Find out more...</a>
              </div>
            </div>
          </div>
    
          <!-- Dr Pepper Column -->
          <div class="col-sm-4">
            <div class="card">
              <a href="assets/images/render_images/drpepper_render.jpg" data-fancybox data-caption="My 3D Dr Pepper Render" class="thumbnail">
                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/dr_pepper.jpg" alt="Dr Pepper">
              </a>
              <div class="card-body">
                <div id="title_right" class="card-title homeText"></div>
                <div id="subTitle_right" class="card-subtitle homeText"></div>
                <div id="description_right" class="card-text homeText"></div>
                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" target="_blank" class="btn btn-primary">Find out more...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Home page Contents-->
      <!-- This is the 3D Models -->
      <div id="models" style>
        <!-- Row to hold cards -->
        <div class="row">
          <!-- Column to hold x3d Model -->
          <div class="col-sm-8">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a id="navSprite" class="nav-link active" href="#">Sprite</a>
                  </li>
                  <li class="nav-item">
                    <a id="navCoke" class="nav-link" href="#">Coca Cola</a>
                  </li>
                  <li class="nav-item">
                    <a id="navPepper" class="nav-link" href="#">Dr Pepper</a>
                  </li>
                </ul>
              </div>
              <!-- Bootstrap 4 card body tp hold info about x3d model -->
              <div class="card-body">
                <!-- Sprite X3D Model -->
                <div id="sprite">
                  <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                  <!-- Place x3D Model here -->
                  <div class="model3D">
                    <x3d class="model3D">
                      <scene>
                        <inline url="assets/x3d/sprite.x3d"> </inline>
                      </scene>
                    </x3d>
                  </div>
                  <div id="x3dCreationMethod_sprite" class="card-title drinksText"></div>
                </div>
                <!-- Coke X3D Model -->
                <div id="coke" style="display: none;">
                  <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                  <!-- Place x3D Model here -->
                  <div class="model3D">
                    <x3d class="model3D">
                      <scene>
                        <inline url="assets/x3d/sprite.x3d"> </inline>
                      </scene>
                    </x3d>
                  </div>
                  <div id="x3dCreationMethod_coke" class="card-title drinksText"></div>
                </div>
                <div id="drpepper" style="display: none;">
                  <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                  <!-- Place x3D Model here -->
                  <div class="model3D">
                    <x3d class="model3D">
                      <scene>
                        <inline url="assets/x3d/sprite.x3d"> </inline>
                      </scene>
                    </x3d>
                  </div>
                  <div id="x3dCreationMethod_pepper" class="card-title drinksText"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column to hold Image Gallery -->
          <div class="col-sm-4">
            <div class="card text-left">
              <div class="card-header gallery-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="card-title title_gallery drinksText"></div>
                <!-- PHP Genrated -->
                <div class="gallery" id="gallery"></div>
                <div class="card-text description_gallery drinksText"></div>
              </div>
            </div>
            <!-- End of Gallery Card -->
          </div>
          <!-- End of Gallery column -->
        </div>
        <!-- Ends row x3d Model and Gallery -->
      </div>
      <!-- End x3d Models and Gallery -->  
      <!-- Start Interaction Panels NEEDS TO BE DONE!!!-->
    <div id="interaction" class="row" style>
      <!-- Column for camera view controls -->
      <div class="col-sm-4">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Camera Views</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dCamera_Subtitle drinksText"></div>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraFront();">
              Default View
            </a>
            <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraSide();">
              Side View
            </a> 
            <a href="#" class="btn btn-outline-dark disabled btn-responsive">
              Disable
            </a>
            <div class="card-text x3dCameraDescription drinksText"></div>
          </div>
        </div>
      </div>
      <!-- Column for Animation controls -->
      <div class="col-sm-4">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Animation</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dAnimationSubtitle drinksText"></div>
            <a href="#" class="btn btn-primary btn-responsive" onclick="spin();">
              Rotate X axis
            </a>
            <a href="#" class="btn btn-secondary btn-responsive" onclick="spin();">
              Rotate Y axis
            </a> 
            <a href="#" class="btn btn-outline-dark disabled btn-responsive">
              Stop
            </a>
            <div class="card-text x3dAnimationDescription drinksText"></div>
          </div>
        </div>
      </div>
      <!-- Column for Render controls -->
      <div class="col-sm-4">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Render</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lighting</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dRenderSubtitle drinksText"></div>
            <a href="#" class="btn btn-primary btn-responsive" onclick="">
              Polygon
            </a>
            <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">
              Wireframe
            </a> 
            <a href="#" class="btn btn-outline-dark disabled btn-responsive">
              HeadLight
            </a>
            <div class="card-text x3dAnimationDescription drinksText"></div>
          </div>
        </div>
      </div>
    </div> 
    <!-- End Interaction Panel -->
    <!-- Row to hold sprite description text -->
    <div id="spriteDescription" class="row" style>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_sprite" class="card-title drinksText"></div>
            <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
            <div id="description_sprite" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End sprite Description contents -->
    <!-- Row to hold coke description text -->
    <div id="cokeDescription" class="row" style>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_coke" class="card-title drinksText"></div>
            <div id="subTitle_coke" class="card-subtitle drinksText"></div>
            <div id="description_coke" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End coke Description contents -->
    <!-- Row to hold drpepper description text -->
    <div id="pepperDescription" class="row" style>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_pepper" class="card-title drinksText"></div>
            <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
            <div id="description_pepper" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/drpepper" class="btn btn-primary btn-responsive">Visit Dr Pepper</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End drpepper Description contents -->
    </div> <!-- End 3D APP SPA CONTENTS -->
    <!-- Footer for 3dApp -->
    <nav class="navbar navbar-expand-sm footer navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="navbar-text float-left copyright">
            <p>
              <span class="align-baseline">&copy 2020 Web 3D | 
                <a style="color: white; "href="javascript:changeLook()">Dark Mode</a> | 
                <a style="color: white; "href="javascript:changeBack()">Reset</a>
              </span>
            </p>
        </div>
        <div class="navbar-text float-right social">
          <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
          <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
        </div>
      </div>
    </nav>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">3D App Contact Details</h4>
            <button type="button" class="close" data-dismuss="modal">x</button>
          </div>
          <!-- Modal Body -->
          <div class="modal-body">
            <p>Samuel Smith, Brighton, Email: <a href="mailto:sgs22@sussex.ac.uk?Subject=Hello%20again" target="_top">sgs22@sussex.ac.uk</a></p>
          </div>
          <!-- Modal Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Custom JS for 3d app SPA -->
    <script src="scripts/js/swap.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="scripts/js/jquery-3.4.1.js"></script>
    <script src="scripts/js/popper.min.js"></script>
    <script src="scripts/js/bootstrap.js"></script>
    <script src="scripts/js/custom.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="scripts/js/gallery_generator.js"></script>
    <script src="scripts/js/getJsonData.js"></script>
  </body>
</html>