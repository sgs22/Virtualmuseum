<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="application/css/bootstrap.css">
    <link rel="stylesheet" href="application/css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="application/assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="application/assets/images/favicon/favicon.ico" type="image/x-icon">

    <!-- X3DOM Package -->
    <link rel="stylesheet" type="text/css" href="application/css/x3dom.css"></link>
    <link rel="stylesheet" type='text/javaScript' href="application/scripts/js/x3dom.js"></link>
    <script type='text/javaScript' src="http://x3dom.org/x3dom/release/x3dom.js"></script>

    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/42611a5285.js" crossorigin="anonymous"></script>
    <link data-require="font-awesome@*" data-semver="4.1.0" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


    <title>AHMuseum</title>
  </head>
  <body id="body">
    <!-- Logo and navigation bar -->
    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <!-- Will need to be updated for an actual rerot apple logo-->
      <!-- Brand -->
      <div class="logo">
        <a class="navbar-brand" href="index.php">
        <i class="fa fa-apple fa-retro fa-2x"></i>
          <!--<p>Apple's Most innovative products.</p>-->
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
            <a id="navAbout" class="nav-link" href="#">About</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item">
            <a id="navModels" class="nav-link" href="#" id="navbardrop">Models</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
            </li>
          </ul>
      </div>
    </nav>
    <!-- Start of 3D App SPA Contents -->
    <div class="container-fluid main_contents"> 
      <!-- HOME PAGE CONTENT -->
      <div id="home" style="display: block;">
        <div class="row">
          <div class="col-sm-12">
            <div id="main_3d_image" class="responsive">
              <div class="col-8 mx-auto">
                <div class="text-center" style="color: white;
                                                padding-top: 350px;
                                                text-shadow: 1.5px 1.5px black;"
                                                >
                  <h1 class="display-4 font-weight-normal">Apple History Museum</h1>
                  <p class="lead font-weight-normal">Looking into the past of Apples most iconic products.</p>
                  <a class="btn btn-outline-secondary" onclick="" href="javascript:animateScroll()" style="color: white; border-color: white;">Take a tour</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- First Row of Cards on grid -->
        <div class="row">
          <!-- Left image -->
          <div class="col-sm-6">
            <div class="imgoverlay">
              <div class="hover hover-3 text-white" id="home_img_1" class="responsive">
                <div class="hover-overlay"></div>
                <div class="hover-3-content px-5 py-4">
                  <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">iMac </span>G3</h3>
                  <p class="hover-3-description small text-uppercase mb-0">First of its kind, not the last. <br>Steve Jobs.</p>
                </div> 
              </div>
            </div>
          </div>
          <!-- Right image -->
          <div class="col-sm-6">
            <div class="imgoverlay">
              <div class="hover hover-3 text-white" id="home_img_2" class="responsive">
                <div class="hover-overlay"></div>
                <div class="hover-3-content px-5 py-4">
                  <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Macintosh </span>128K</h3>
                  <p class="hover-3-description small text-uppercase mb-0">First of its kind, not the last. <br>Steve Jobs.</p>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <!-- Second Row of Cards on grid -->
        <div class="row">
          <!-- Center image -->
          <div class="col-lg-12">
            <div class="imgoverlay">
              <div class="hover hover-4 text-white" id="home_img_3" class="responsive">
                <div class="hover-overlay"></div>
                <div class="hover-4-content">
                  <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Apple </span>II</h3>
                  <p class="hover-4-description text-uppercase mb-0 small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incidunt</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Third Row of Cards on grid -->
        <div class="row">
          <!-- Left image -->
          <div class="col-sm-6">
            <div class="imgoverlay">
              <div class="hover hover-3 text-white" id="home_img_4" class="responsive">
                <div class="hover-overlay"></div>
                <div class="hover-3-content px-5 py-4">
                  <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">iPhone </span>2G</h3>
                  <p class="hover-3-description small text-uppercase mb-0">First of its kind, not the last. <br>Steve Jobs.</p>
                </div> 
              </div>
            </div>
          </div>
          <!-- Right image -->
          <div class="col-sm-6">
            <div class="imgoverlay">
              <div class="hover hover-3 text-white" id="home_img_5" class="responsive">
                <div class="hover-overlay"></div>
                <div class="hover-3-content px-5 py-4">
                  <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">iPod </span>Classic</h3>
                  <p class="hover-3-description small text-uppercase mb-0">First of its kind, not the last. <br>Steve Jobs.</p>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END HOME PAGE CONTENTS-->
      <!-- ABOUT PAGE -->
      <div id="about" style>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="application/assets/images/render_images/ipodRender.png" alt="First slide">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Explore the Virtual Museum</h1>
                  <p>In this Virtual Museum you will be able to explore the iconic products that apple created revolutionising the late 20th century.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore Musuem</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="application/assets/images/render_images/iPhoneRender.png" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Learn Apple's History</h1>
                  <p>Look at renders, live models and products right from this website available and open for free 24 hours a day.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="application/assets/images/render_images/macintoshRender.png" alt="Third slide">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1>This is an example of how a virtual Museum is created</h1>
                  <p>This virtual museum using the latest technology in web devlopment to seemlessly explore products cretaed over 40 years ago.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          <!-- About Points -->
        <div class="container marketing">
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="rounded-circle" src="application/assets/images/site_images/Steve_Jobs.jpg" alt="Generic placeholder image" width="140" height="140" background-size= "cover" background-position= "center">
              <h2>Steve Jobs</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="application/assets/images/site_images/jony_ive.jpg" alt="Generic placeholder image" width="140" height="140"  background-size= "cover" background-position= "center">
              <h2>Jony Ive</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="application/assets/images/site_images/Steve_Wozniak.jpg" alt="Generic placeholder image" width="140" height="140"  background-size= "cover" background-position= "center">
              <h2>Steve Wozniak</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div> 
        <!-- Column to hold Image Gallery -->
        <div class="col-sm-6">
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
      </div> <!-- END ABOUT PAGE -->
      <!-- 3D MODEL PAGE -->
      <div id="models" style>
          <!-- Row to hold cards -->
          <div class="row">
            <!-- Column to hold x3d Model -->
            <div class="col-sm-8">
              <div class="card text-left">
                <!-- Bootstrap 4 card body tp hold info about x3d model -->
                <div class="card-body">
                  <!-- Button to switch object X3D Model -->
                  <div id="models" style="display: block">
                    <div id="modelSelector" class="text-center">
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-dark btn-lg active">
                            <input type="radio" name="options" id="model0" autocomplete="off" onclick="reply_click(this.id);"checked>iMac
                        </label>
                        <label class="btn btn-outline-dark btn-lg">
                            <input type="radio" name="options" id="model1" autocomplete="off" onclick="reply_click(this.id);">iPhone
                        </label>
                        <label class="btn btn-outline-dark btn-lg">
                            <input type="radio" name="options" id="model2" autocomplete="off" onclick="reply_click(this.id);">Macintosh
                        </label>
                        <label class="btn btn-outline-dark btn-lg">
                            <input type="radio" name="options" id="model3" autocomplete="off" onclick="reply_click(this.id);">iPod
                        </label>
                      </div>
                    </div>
                      <!-- Place Object Model here -->
                    <div style="display:block;">
                      <div class="obj3D">
                        <div class="model3D">
                          <x3d id="model">
                            <scene>
                              <inline id="x3domUrl" nameSpaceName="model" mapDEFToID="true"></inline>
                            </scene>
                          </x3d>
                        </div>
                      </div>
                      <div class="objImage">
                        <div id="imageUrl" style="text-align: center !important;"></div>
                      </div>
                      <div class="objVideo">
                        <div id="videoUrl"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End x3d Models  --> 
            <div class="col-sm-4"> <!-- Column to hold Description --> 
              <!-- Row to hold description text -->
                <div id="models" class="row" style>
                  <div class="col-sm-12">
                    <div class="card" style="padding-top: 50px;">
                      <div class="card-body modelDescription">
                        <div id="name" class="card-title modelTitle"></div>
                        <div class="subTitle-header">Lead Designer: </div>
                          <div id="designedBy" class="card-subtitle modelSubTitle"></div>
                        <div class="subTitle-header">Model Number: </div>
                          <div id="modelNumber" class="card-subtitle modelSubTitle"></div>
                        <div class="subTitle-header">Date of Production: </div>
                          <div id="productionDate" class="card-subtitle modelSubTitle"></div>
                        <div class="subTitle-header">Price at Release: </div>
                          <div id="releasePrice" class="card-subtitle modelSubTitle"></div>
                        <div class="subTitle-header">Description: </div>
                          <div id="description" class="card-text modelText"></div>
                        <div class="subTitle-header">Audio Accessibility (Siri): <img src="https://img.icons8.com/nolan/32/siri.png"/> </div>
                          <div id="soundUrl" class="card-text playBackAudio"></div>
                        <div class="subTitle-header">Media Format: </div>
                        <div id="objSelector" class="text-left" style="margin-bottom: 3px;">
                          <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-dark x3dButton active">
                                <input type="radio" name="options" id="obj3D" autocomplete="off" onclick="reply_click(this.id);"checked>X3D Model
                            </label>
                            <label class="btn btn-outline-dark videoButton">
                                <input type="radio" name="options" id="objVideo" autocomplete="off" onclick="reply_click(this.id);playVid();"> Launch Video
                            </label>
                            <label class="btn btn-outline-dark imgButton">
                                <input type="radio" name="options" id="objImage" autocomplete="off" onclick="reply_click(this.id);"> Photo Image
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- End Description contents -->

            </div> <!-- ENDS Column to hold Description -->
          </div> <!-- Ends row x3d Model and Gallery -->
          <div id="interaction" class="row" style> <!-- Start Interaction Panels -->
            <!-- Column for camera view controls -->
            <div class="col-sm-4">
              <div class="interactionPanel">
                <div class="card text-center">
                  <div class="card-header text-center">
                    <ul class="nav nav-tabs card-header-tabs text-center">
                      <li class="nav-item">
                        <a class="nav-link" href="#"  data-toggle="popover" data-trigger="hover"
                            data-placement="top" title data-content="View the model at different angles" data-original-title="Camera Views:">Camera Views:</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body" style="background-color: rgba(0, 0, 0, 0.03);">
                    <div class="card-Title"></div>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-dark">
                        <input type="radio" name="options" id="option1" autocomplete="off" onclick="prevView();"> Previous
                      </label>
                      <label class="btn btn-outline-dark active">
                        <input type="radio" name="options" id="option2" autocomplete="off" onclick="mainCamera();" checked> Default
                      </label>
                      <label class="btn btn-outline-dark">
                        <input type="radio" name="options" id="option3" autocomplete="off" onclick="nextView();"> Next
                      </label>
                      <label class="btn btn-outline-dark">
                        <input type="radio" name="options" id="option3" autocomplete="off" onclick="resetView();"> Reset
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column for Animation controls -->
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-header text-center">
                  <ul class="nav nav-tabs card-header-tabs text-center">
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                            data-placement="top" title data-content="Use these Toggles to animate the model" data-original-title="Animation:">Animation:</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body" style="background-color: rgba(0, 0, 0, 0.03);">
                  <div class="card-Title"></div>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-dark">
                        <input type="radio" name="options" id="option1" autocomplete="off" onclick="spin();">Rotate Animation
                      </label>
                      <label class="btn btn-outline-dark">
                        <input type="radio" name="options" id="option2" autocomplete="off" onclick="topAnimation();">Pan Animation
                      </label>
                      <label class="btn btn-outline-dark active">
                        <input type="radio" name="options" id="option3" autocomplete="off" onclick="mainCamera();" checked>Stop Animation
                      </label>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-header text-center">
                  <ul class="nav nav-tabs card-header-tabs text-center">
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                            data-placement="top" title data-content="Render the model in different formats" data-original-title="Render/Lighting:">Render/Lighting:</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body" style="background-color: rgba(0, 0, 0, 0.03);">
                  <div class="card-Title"></div>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-dark active">
                        <input type="radio" name="options" id="option1" autocomplete="off" onclick="polygon();" checked> Polygon
                      </label>
                      <label class="btn btn-outline-dark">
                        <input type="radio" name="options" id="option2" autocomplete="off" onclick="wireframe();"> Wireframe
                      </label>
                      <label class="btn btn-outline-dark">
                        <input type="radio" name="options" id="option3" autocomplete="off" onclick="lighting()"> Headlight
                      </label>
                    </div>
                </div>
              </div>
            </div>
          </div> <!-- End Interaction Panel Second Row -->
        </div> <!-- END OF MODELS PAGE --> 
      </div> 
    </div> <!-- End 3D APP SPA CONTENTS -->
    <!-- Footer for 3dApp -->
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <i class="fa fa-apple fa-retro fa-2x"></i>
          <small class="d-block mb-3 text-muted">&copy; 2020 Web 3D</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="javascript:changeLook()">Dark Mode</a></li>
            <li><a class="text-muted" href="javascript:changeBack()">Standard</a></li>
            <li><a class="text-muted" href="#">more styling</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Download models</a></li>
            <li><a class="text-muted" href="#">View source on GitHub</a></li>
            <li><a class="text-muted" href="#">Download source</a></li>
            <li><a class="text-muted" href="#">Bibliography</li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Social</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">GitHub</a></li>
            <li><a class="text-muted" href="#">Sussex University</a></li>
            <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus fa-2x"></i></a></li>
            <li><a href="#"><i class="fab fa-github-square fa-2x"></i></a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Information</a></li>
            <li><a class="text-muted" href="#">Bootstrap</a></li>
            <li><a class="text-muted" href="#">X3dom</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->

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
    <script src="application/scripts/js/swap.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="application/scripts/js/jquery-3.4.1.js"></script>
    <script src="application/scripts/js/popper.min.js"></script>
    <script src="application/scripts/js/bootstrap.js"></script>
    <script src="application/scripts/js/custom.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="application/scripts/js/gallery_generator.js"></script>
    <script src="application/scripts/js/getJsonData.js"></script>
    <script src="application/scripts/js/get3Dmodels.js"></script>
    <script src="application/scripts/js/modelInteractions.js"></script>
  </body>
</html>