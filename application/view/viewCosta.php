<!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src='http://www.x3dom.org/download/x3dom.js'> </script> 
        <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/download/x3dom.css'></link> 
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Fancybox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap+CSS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

        <!-- Custom Javascript -->
        <script src="js/gallery_functions.js"></script>
        <script src="js/getJsondata.js"></script>
        <script src="js/swap_functions.js"></script>
        <script src="js/modelInteraction.js"></script>
    </head>
    <body>

        <button id="goback_button" type="button" class="btn btn-danger btn-floating btn-lg fixed-bottom" onclick="javascript:swap('main_page')" style="width: 10em;display: none;">
            <i>Go Back</i>
        </button>

        <!-- Header -->
        <?php include_once("header.html"); ?>

        <!-- First -->
        <div id="main_page" class="container_fluid main_contents">

        <div class="row">
            <!-- Future 3d Model-->
            <div class="col-sm-4" style="padding-left: 50px;">
                <div div class="card" id="item_card" style="width: 38rem;">
                    <h4  class="card-title">Extraordinary <br>Every day</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Indulge in your favorites</h3>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button href="#"  id="mainpage_button" data-src="#main_page">Find a Costa></button>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div div class="card" id="item_card" style="width: 50rem;">
                <a class="mainpage_images" href="assets/x3d/costa_cup/logo.png">
                <img src="assets/x3d/costa_cup/logo.png" width="700" height="400" style="position: absolute; right: 90px;">
                </a>
                </div>
            </div>
        </div>

        <!-- Iced Latte Info -->
        <div class="row" style="padding-top: 50px; background:linear-gradient(to bottom, transparent, rgba(190, 231, 190,0.5))">
            
            <!-- Future 3d Model-->
            <div class="col-sm-6" >
                <div div class="card" id="item_card" style="width: 50rem;">
                <a class="mainpage_images" href="assets/x3d/costa_iced_cup/costa_iced_cup.png">
                    <img src="assets/x3d/costa_iced_cup/costa_iced_cup.png" width="850" height="500" style="margin: 0 auto" >
                </a>
                </div>
            </div>

            <div class="col-sm-6">
                <div div class="card" id="item_card" style="width: 38rem;">
                    <h4 id="iced_latte_main_title" class="card-title"></h4>
                    <div class="card-body" id="drink_description_main">
                        <h5 id="iced_latte_main_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button onclick="javascript:swap('iced_latte'); swap_information('iced_latte_page');change_flavour('flavour_iced_latte');" id="mainpage_button">Learn More ></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hot Latte Info -->
        <div class="row" style="padding-top: 50px; background:linear-gradient(to bottom, rgba(190, 231, 190,0.5), rgba(247, 247, 220, 0.5))">
            <!-- Future 3d Model-->

            <div class="col-sm-6">
                <div div class="card" id="item_card" style="width: 38rem;">
                    <h4 id="latte_main_title" class="card-title"></h4>
                    <div class="card-body" id="drink_description_main">
                        <h5 id="latte_main_description"></h3>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button onclick="javascript:swap('hot_latte'); swap_information('hot_latte_page');" id="mainpage_button">Learn More ></button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" >
                <a class="mainpage_images" href="assets/x3d/costa_cup/costa_cup.png">
                    <img src="assets/x3d/costa_cup/costa_cup.png" width="850" height="500" style="margin: 0 auto;" >
                </a>
            </div>
        </div>

        <!-- Cold Can Info -->
        <div class="row" style="padding-top: 50px; background:linear-gradient(to bottom, rgba(247, 247, 220, 0.5), rgba(252, 187, 187, 0.5))">
            <div class="col-sm-6" >
                <a class="mainpage_images" href="assets/x3d/costa_re_product/costa_re_product.png">
                    <img src="assets/x3d/costa_re_product/costa_re_product.png" width="850" height="500" >
                </a>
            </div>

            <div class="col-sm-6">
                <div div class="card" id="item_card" style="width: 40rem;">
                    <h4 id="canned_latte_main_title" class="card-title"></h4>
                    <div class="card-body" id="drink_description_main">
                        <h5 id="canned_latte_main_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button onclick="javascript:swap('canned_latte'); swap_information('canned_latte_page');" id="mainpage_button">Learn More ></button>
                    </div>
                </div>
            </div>

        </div>
        <!-- What's New -->
        <div class="row" style="background:linear-gradient(to bottom, rgba(252, 187, 187, 0.5),rgba(252, 187, 187, 0.5))">
            <div class="col-sm-12">
                <h4 id="latte_title">What's New</h4>
            </div>
        </div>
        <div class="row" id="footer_info" style="background:linear-gradient(to bottom, rgba(252, 187, 187, 0.5),transparent)">
            <div class="col-sm-4" style="padding: 50px;">
                <div div class="card" id="what_new_card">
                    <img src="assets/x3d/costa_iced_cup/temp.jpg" class="card-img-top" alt="...">
                    <h4 class="card-title" id="what_new_iced"></h4>
                    <div class="card-body mini-card-body" >
                        <h5 id="iced_latte_mini_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button href="#" id="mainpage_button">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="padding: 50px;">
                <div div class="card" id="what_new_card">
                    <img src="assets/x3d/costa_cup/temp.jpg" class="card-img-top" alt="...">
                    <h4 class="card-title" id="what_new_title">Latte</h4>
                    <div class="card-body mini-card-body">
                        <h5 id="latte_mini_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button href="#" id="mainpage_button">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="padding: 50px;">
                <div div class="card" id="what_new_card">
                    <img src="assets/x3d/costa_re_product/temp.jpg" class="card-img-top" alt="...">
                    <h4 class="card-title" id="what_new_canned"></h4>
                    <div class="card-body mini-card-body">
                        <h5 id="canned_latte_mini_description"></h5>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button href="#" id="mainpage_button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Other Contents -->


        <!-- X3D Models -->
        <div id="iced_latte" class="container-fluid main_contents" style="display: none;">

            <!-- Original Content -->
            <div class="row">
                <div div class="card" id="item_card" style="width: 58rem;">
                    <div class="card-title card-page-title" >

                        <h2 class="iced_latte_page" id="iced_latte_page_title"></h2>
                        <h2 class="cold_brew_page" id="cold_brew_page_title"></h2>
                        <h2 class="chai_iced_page" id="chai_iced_page_title"></h2>

                        <h2 class="hot_latte_page" id="hot_latte_page_title"></h2>
                        <h2 class="hot_chocolate_page" id="hot_chocolate_page_title"></h2>
                        <h2 class="hot_mocha_page" id="hot_mocha_page_title"></h2>

                        <h2 class="canned_latte_page" id="canned_latte_page_title"></h2>
                        <h2 class="canned_caramel_page" id="canned_caramel_page_title"></h2>
                        <h2 class="canned_americano_page" id="canned_americano_page_title"></h2>

                    </div>
                    <div class="card-body card-page-slogan" style="text-align: center;">
                        <h2 class="iced_latte_page" id="iced_latte_page_slogan"></h2>
                        <h2 class="cold_brew_page" id="cold_brew_page_slogan"></h2>
                        <h2 class="chai_iced_page" id="chai_iced_page_slogan"></h2>

                        <h2 class="hot_latte_page" id="hot_latte_page_slogan"></h2>
                        <h2 class="hot_chocolate_page" id="hot_chocolate_page_slogan"></h2>
                        <h2 class="hot_mocha_page" id="hot_mocha_page_slogan"></h2>

                        <h2 class="canned_latte_page" id="canned_latte_page_slogan"></h2>
                        <h2 class="canned_caramel_page" id="canned_caramel_page_slogan"></h2>
                        <h2 class="canned_americano_page" id="canned_americano_page_slogan"></h2>
                    </div>
                </div>
        </div>
    
        <div class="row" style="padding-top: 50px;">
            
            <!-- Future 3d Model-->
            <div class="col-sm-6" >
                <div class="float-container">
                        <div class="float-child dropdown"> 
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown_flavour" data-bs-toggle="dropdown" aria-expanded="false">
                                Flavour
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown_flavour">
                                <div id="iced_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_iced_latte'); swap_information('iced_latte_page');">Iced Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_cold_brew'); swap_information('cold_brew_page');">Cold Brew</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_chai_tea'); swap_information('chai_iced_page');">Chai Tea Iced Latte</a></li>
                                </div>
                                <div id="hot_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_hot_latte'); swap_information('hot_latte_page');">Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_hot_chocolate'); swap_information('hot_chocolate_page');">Hot Chocolate</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_hot_mocha'); swap_information('hot_mocha_page');">Mocha</a></li>
                                </div>
                                <div id="canned_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_canned_latte'); swap_information('canned_latte_page');">Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_canned_caramel'); swap_information('canned_caramel_page');">Caramel Latte</a></li>
                                    <li><a class="dropdown-item" onclick="change_flavour('flavour_canned_americano'); swap_information('canned_americano_page');">Americano</a></li>
                                </div>
                            </ul>
                        </div>
                            <div class="float-child dropdown"> 
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Category 
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div id="iced_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="swap('iced_latte'); change_flavour('flavour_iced_latte'); swap_information('iced_latte_page');">Iced Drinks</a></li>
                                    <li><a class="dropdown-item" onclick="swap('hot_latte'); change_flavour('flavour_iced_latte'); swap_information('hot_latte_page');">Hot Drinks</a></li>
                                    <li><a class="dropdown-item" onclick="swap('canned_latte'); change_flavour('flavour_iced_latte'); swap_information('canned_latte_page');">Canned Drinks</a></li>
                                </div>
                            </ul>
                        </div>
                </div>
                <x3d id="wire"> 
                    <scene render="true" visible="true" pickmode="idBuf" dopickpass="true">
                        <Switch whichChoice="0" id="sceneSwitch">

                                <transform>
                                <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/costa_iced_cup/costa_iced_cup.x3d">  </inline>
                                </transform>

                                <transform>
                                <inline nameSpaceName="model"  mapDEFToID="true"  url="assets/x3d/costa_cup/costa_cup.x3d">  </inline>
                                </transform>

                                <transform DEF="can">
                                <inline nameSpaceName="model"  mapDEFToID="true"  url="assets/x3d/costa_re_product/costa_re_product.x3d">  </inline>
                                </transform>

                        </Switch>
                                <!-- CONTROLS ROTATION OF THE MODEL __ Iced Drink Straw up and down

                                <timeSensor id="animation_timesensor" DEF='RotationTimer' cycleInterval='4' loop='true' enabled='false'></timeSensor>

                                <orientationInterpolator DEF='Rotator' key='0 0.25 0.5 0.75 1' keyValue='0 1 0 0 0 1 0 1.57079 0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317'></orientationInterpolator>
                                
                                <ROUTE fromNode='RotationTimer' fromField='fraction_changed' toNode='Rotator' toField='set_fraction'></ROUTE>
                                <ROUTE fromNode='Rotator' fromField='value_changed' toNode='ball' toField='set_rotation'></ROUTE>

                                -->

                                <!-- CONTROLS ROTATION OF THE MODEL __ Hot Drink Cup upd and down-->
                                <timeSensor id="animation_timesensor" DEF='RotationTimer' cycleInterval='4' loop='true' enabled='false'></timeSensor>

                                <orientationInterpolator DEF='Rotator' key='0 0.25 0.5 0.75 1' keyValue='0 1 0 0 0 1 0 1.57079 0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317'></orientationInterpolator>
                                
                                <ROUTE fromNode='RotationTimer' fromField='fraction_changed' toNode='Rotator' toField='set_fraction'></ROUTE>
                                <ROUTE fromNode='Rotator' fromField='value_changed' toNode='ball' toField='set_rotation'></ROUTE>

                                <!-- CONTROLS ROTATION OF THE MODEL __ Can rotate-->
                                <timeSensor id="animation_timesensor" DEF='RotationTimer' cycleInterval='4' loop='true' enabled='false'></timeSensor>

                                <orientationInterpolator DEF='Rotator' key='0 0.25 0.5 0.75 1' keyValue='0 1 0 0 0 1 0 1.57079 0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317'></orientationInterpolator>
                                
                                <ROUTE fromNode='RotationTimer' fromField='fraction_changed' toNode='Rotator' toField='set_fraction'></ROUTE>
                                <ROUTE fromNode='Rotator' fromField='value_changed' toNode='ball' toField='set_rotation'></ROUTE>

                                <!-- Lights -->
                                <background skycolor="0 0 0" transparency=1 roundcolor="" groundangle="" skyangle="" backurl="" bottomurl="" fronturl="" lefturl="" righturl="" topurl=""></background>
                                <directionallight id="directional" direction="0 -1 0" on="FA intensity="2.0" shadowintensity="0.0" color="1,1,1" shadowmapsize="1024" znear="-1" zfar="-1" shadowcascades="1" shadowsplitfactor="1" shadowsplitoffset="0.1">
                                </directionallight> 
                                <PointLight id='point' on='FALSE' intensity='5.000' color='0.0 0.6 0.0' location='0 10 0.5 ' radius='20.0000' >  </PointLight> 
                                <NavigationInfo id="head" headlight='true' type='"EXAMINE"'>  </NavigationInfo> 
                                <SpotLight id='spot' on ="FALSE" beamWidth='0.9' color='0 0 1' cutOffAngle='1' location='0 0 10' radius='90.000' >  </SpotLight> 
                    </scene>
                </x3d>
            </div>
    
            <div class="col-sm-6">
                <div div class="card" id="item_card" style="width: 38rem;">
                    <div class="card-title card-latte-title">

                        <h4 class="iced_latte_page" id="iced_latte_title"></h4>
                        <h4 class="cold_brew_page" id="cold_brew_title"></h4>
                        <h4 class="chai_iced_page" id="chai_iced_title"></h4>

                        <h4 class="hot_latte_page" id="hot_latte_title"></h4>
                        <h4 class="hot_chocolate_page" id="hot_chocolate_title"></h4>
                        <h4 class="hot_mocha_page" id="hot_mocha_title"></h4>

                        <h4 class="canned_latte_page" id="canned_latte_title"></h4>
                        <h4 class="canned_caramel_page" id="canned_caramel_title"></h4>
                        <h4 class="canned_americano_page" id="canned_americano_title"></h4>

                    </div>
                    <div class="card-body card-drink-description">

                        <h3 class="iced_latte_page" id="drink_description_iced_latte"></h3>
                        <h3 class="cold_brew_page" id="drink_description_cold_brew"></h3>
                        <h3 class="chai_iced_page" id="drink_description_chai_iced"></h3>

                        <h3 class="hot_latte_page" id="drink_description_hot_latte"></h3>
                        <h3 class="hot_chocolate_page" id="drink_description_hot_chocolate"></h3>
                        <h3 class="hot_mocha_page" id="drink_description_hot_mocha"></h3>

                        <h3 class="canned_latte_page" id="drink_description_canned_latte"></h3>
                        <h3 class="canned_caramel_page" id="drink_description_canned_caramel"></h3>
                        <h3 class="canned_americano_page" id="drink_description_canned_americano"></h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4" style="background-color: transparent; padding: 30px;">
                <div class="card" style="background-color: transparent;">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" data-bs-target="#coke" aria-controls="coke" aria-selected="true">Viewpoint</button>
                            </li>
                        </ul>
                    </div>
                    <h3 class="card-title" style="text-align: center; padding: 30px">Camera Controls</h3>
                    <div class="card-body">
                            <nav class="navbar sticky-top navbar-expand-sm" style="width: 25%;">
                                <button type="button" style="background-color: rgb(253, 160, 160); border-color: transparent; color:white" onclick="cameraFront();">
                                    Front
                                </button>
                                <button type="button" style="background-color: rgb(241, 253, 160); border-color: transparent; color:white" onclick="cameraBack();">
                                    Back
                                </button>
                                <button type="button" style="background-color: rgb(160, 253, 177); border-color: transparent; color:white" onclick="cameraLeft();">
                                    Left
                                </button>
                                <button type="button" style="background-color: rgb(160, 225, 253); border-color: transparent; color:white" onclick="cameraRight();">
                                    Right
                                </button>
                                <button type="button" style="background-color: rgb(206, 160, 253); border-color: transparent; color:white" onclick="cameraTop();">
                                    Top
                                </button>
                                <button type="button" style="background-color: rgb(255, 177, 207); border-color: transparent; color:white" onclick="cameraBottom();">
                                    Bottom
                                </button>
                                <button type="button" style="background-color: rgb(127, 127, 127); border-color: transparent; color:white" onclick="cameraNormal();">
                                    Normal
                                </button>
                            </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="background-color: transparent; padding: 30px;">
                <div class="card" style="background-color: transparent;">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" data-bs-target="#coke" aria-controls="coke" aria-selected="true">Lighting Control</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center; padding: 30px">Lighting Control</h3>
                            <input type="checkbox"  onclick="lightSwitch('point')">
                                <label>point light</label><br>
                            <input type="checkbox"  onclick="lightSwitch('spot')">
                                <label>spot light</label><br>
                            <input type="checkbox"  onclick="lightSwitch('directional')">
                                <label>directional light</label><br>
                            <input type="checkbox" checked="true" onclick="headlight('head')">
                                <label>headlight</label><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="background-color: transparent; padding: 30px;">
                <div class="card" style="background-color: transparent;">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link active" data-bs-toggle="tab" type="button" role="tab" href="#animation">Animation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="camera_button" class="nav-link" data-bs-toggle="tab" type="button" role="tab" href="#render" >Render</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content card-body">
                        <div class="tab-pane active" id="animation">
                        <h3 class="card-title" style="text-align: center; padding: 30px">Animation</h3>
                            <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="onAnimation();">On</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="offAnimation();">Off</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="render">
                            <h3 class="card-title" style="text-align: center; padding: 30px">Render</h3>
                            <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="wireFrame();">WireFrame</a>
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="vertex();">Vertex</a>
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="normal();">Normal</a>
                                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="redraw();">Reset</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Gallery Feature -->
        <div id="our_coffee_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 58rem;">
                    <h4  class="card-title">Gallery of our drinks!</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Indulge in your favorites</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <div div class="card" id="item_card" style="width: 68rem;">
                    <div class="row card-body">
                        <div class="col-sm-6">
                            <h4 class="card-title" id="latte_title">Latte</h4>
                            <h5 class="card-text" id="latte_description">We combine our signature espresso with a creamy milk or dairy alternative of your choice for the ideal drink to sip when it's served hot or cold.</h5>
                        </div>
                        <a class="col-sm-6" rel="gallery_fancybox" href="assets/images/teaser-latte-macro-389x280.jpg.webp">
                            <img src="assets/images/teaser-latte-macro-389x280.jpg.webp" alt="sans"/>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div div class="card" id="item_card" style="width: 68rem;">
                    <div class="row card-body">
                    <a class="col-sm-6" rel="gallery_fancybox" href="assets/images/teaser-latte-macro-389x280.jpg.webp">
                        <img  src="assets/images/teaser-latte-macro-389x280.jpg.webp" alt="sans"/>
                    </a>
                        <div class="col-sm-6">
                            <h4 class="card-title" id="latte_title">Latte</h4>
                            <h5 class="card-text" id="latte_description">We combine our signature espresso with a creamy milk or dairy alternative of your choice for the ideal drink to sip when it's served hot or cold.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div div class="card" id="item_card" style="width: 68rem;">
                    <div class="row card-body">
                        <div class="col-sm-6">
                            <h4 class="card-title" id="latte_title">Latte</h4>
                            <h5 class="card-text" id="latte_description">We combine our signature espresso with a creamy milk or dairy alternative of your choice for the ideal drink to sip when it's served hot or cold.</h5>
                        </div>
                    <a class="col-sm-6" rel="gallery_fancybox" href="assets/images/teaser-latte-macro-389x280.jpg.webp">
                        <img src="assets/images/teaser-latte-macro-389x280.jpg.webp" alt="sans"/>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <!--  Extra Feature -->
        <div id="our_menu_content" class="container-fluid main_contents" style="display: none;">
                <div class="row">
                    <div div class="card">
                        <input type="text" id="mySearch" onkeyup="menu_function()" placeholder="Search.." title="Type in a category">
                    </div>
                </div>
            <ul class="list-group list-group-vertical" id="myMenu" style=" width:33.3%;">
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Iced Latte</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Espresso</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Latte</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Americano</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Fluid</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Latte</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Americano</h4>
                </div>
                </a>
              </li>
              <li class="list-group-item"><a>
                <div div class="card" id="what_new_card" style="width:20rem;height:20rem">
                    <h4 class="card-title" id="what_new_title">Fluid</h4>
                </div>
                </a>
              </li>
            </ul>
        </div>

        <!-- Contact Us Feature -->
        <div id="contact_us_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem;">
                    <h4  class="card-title">Have a question about Costa?</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> If you can’t find what you’re looking for on our website check out our FAQ’s for the quickest answer. Alternatively, you can reach our Customer Services team by submitting a query through our contact form.</h3>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      1) I'm experiencing issues with the App
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>If the scan on your device fails whilst using the app at a till, check with the barista and try again. Baristas can also add your Beans retrospectively if the issue continues. If you’re using the app at an Express machine and the scan on your device fails, please try again and double check that you are connected to Wi-fi. For help with any other app related issue, see here.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2) How can I register to Costa Club?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>It's simple! Download our Costa Club app to register and start collecting beans today. If you have a plastic card, you can register it here.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3) How can I replace my lost card?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>Log in to your Costa Club account here and select the ‘Card’ tab. Here, you’ll find instructions on how to replace your card. You can also download our app and login to start collecting beans. Don’t worry! You won’t lose the beans you’ve collected on your lost card, as all your beans will show in your account.</p>
                    </div>
                  </div>
                </div>
              </div>
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem; padding-top: 30px;">
                    <h4  class="card-title">Contact us directly!</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Please fill in the form with all the information.</h3>
                    </div>
                </div>
            </div>
            <form method="post">
                <div class="form-group">
                  <label class="form-group-header" for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                  <label class="form-group-header" for="category">Please choose the category most appropriate</label>
                  <select class="form-control" id="category" name="category">
                    <option>Dietary Questions</option>
                    <option>Problems with the application</option>
                    <option>Problems with the web page</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-group-header" for="description_request">Description of the issue</label>
                  <textarea class="form-control" id="description_request" name="description" rows="3" required></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        
        <!-- Request List Feature -->
        <div id="request_list_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem;">
                    <h4  class="card-title">Want to see the user requests?</h4>
                    <div class="card-body" style="text-align: center;">
                    <h4> You've come to the right place! </h4>
                    <h3> You can even remove them with the click of a button! </h3>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="request_list_placeholder">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Remove Button</th>
            </tr>
            </thead>
            <tbody class="tbody-light">
                <temp></temp>
            </tbody>
            </table>
        </div>

        <!-- Going Beyond Page -->
        <div id="going_beyond_content" class="container-fluid main_contetns" style="display: none;">
            <div class="row">
                <div div class="card" id="item_card" style="width: 50rem;">
                    <h4  class="card-title">What feature are beyond in this project?</h4>
                    <div class="card-body" style="text-align: center;">
                    <h3> Here they are: </h3>
                    </div>
                </div>
            </div>
            <ul>
                <li>The X3D models are more complex</li>
                <li>Allowing for change in the X3D Model via html5</li>
                <li>Request Feature, sending data to the SQLite Database</li>
                <li>Used Blender to create the X3D model.</li>
            </ul> 
        </div>

        <?php include_once("footer.html"); ?>
        <post></post>

        <!-- Dinamic submitting form without reloading page !-->
        <script>
            $( "form" ).submit(function( event ) 
            {
            $.ajax({
                    url: "index.php/apiAddRequest",
                    type: 'POST',
                    data: { 
                            email: $("#email").val(),
                            category: $("#category").val(),
                            description: $("#description_request").val(),
                          },
                    success: function (data) 
                        {
                            alert('Succesfully Sent Request!');
                        },
                });
            })
        </script>

        <script>
                $( "#request_list" ).on("click", function(event)
                {
                    $.ajax({
        type: 'POST',
        dataType:'html',
        url: "index.php/apiGetRequestData",
        success: function(data) 
        {
            $('temp').html(data);
        }
    });                })
        </script>
    </body>
</html>