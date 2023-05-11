<!DOCTYPE html>
<html>
    <head>
        <title>Costa Coffee 3D Gallery</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- CSS -->
        <link rel="icon" href="application/assets/images/costa_logo.png" type="image/icon type">
        <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'></link> 
        <link rel="stylesheet" href="application/css/bootstrap.css">
        <link rel="stylesheet" href="application/css/custom.css">
        <link rel="stylesheet" href="application/css/jquery.fancybox.min.css"/>

        <!-- Bootstrap+CSS -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    </head>
    <body>
  <!-- Toast used to describe material for the X3D Model -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="material-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="application/assets/images/costa_logo.png" class="rounded me-2" alt="...">
                    <strong class="me-auto" id="mat_name"></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="mat_info"></div>
            </div>
        </div>

        <!-- Go Back Button Appears when not on the main page -->
        <div>
        <button id="goback_button" type="button" class="btn btn-danger btn-floating btn-lg fixed-bottom" onclick="swap('main_page')" style="width: 10em;display: none;">
            <i>Go Back</i>
        </button>
        </div>

        <button id="darkmode_button" type="button" class="btn btn-danger btn-floating float-right fixed-bottom" onclick="changeTheme();" style="font-size:50px; width:1.5em; position: fixed; margin-left: auto; margin-right: 0; border-color:transparent;background-color:transparent">
            <div  id="moon_icon">
                <i class="fa fa-moon" style="color:black"></i>
            </div>
            <div  id="sun_icon" style="display:none">
                <i class="fa fa-sun" style="color:white" id="sun_icon" style="display:none"></i>
            </div>
        </button>


        <!-- Header -->
        <?php include_once("header.html"); ?>

        <!-- Main Page Section -->
        <div id="main_page" class="container_fluid main_contents">
        <div class="row">
            <!-- Future 3d Model-->
            <div class="col-sm-12">
            <div id="main_3d_image">
                <div class="card" id="main_text">
                    <div class="card-title">
                        <h1>Extraordinary <br>Every day</h1>
                        <h2> Indulge in your favorites</h2>
                    </div>
                    <div class="card-footer mx-auto text-center justify-content-center">
                        <button  class="costa_button" onclick="window.location.href=' https://www.costa.co.uk'">Find a Costa</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Iced Drink Info -->
        <div class="row iced_drink_row" style="margin-top: 40px;">
            
            <!-- Future 3d Model-->
            <div class="col-sm-12">
                <div div class="card item_card">
                    <div class="card-title">
                        <h1 id="iced_latte_main_title"></h1>
                        <h2 class="drink_description_main" id="iced_latte_main_description"></h2>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" onclick="swap('iced_latte'); swapDBinfo(1); change_flavour(1);">Learn More ></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hot Drink Info -->
        <div class="row hot_drink_row">
            <!-- Future 3d Model-->
            <div class="col-sm-12">
                <div div class="card item_card">
                    <div class="card-title">
                        <h1 id="latte_main_title"></h1>
                        <h2 class="drink_description_main" id="latte_main_description"></h2>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" onclick="swap('hot_latte'); swapDBinfo(4); change_flavour(4);">Learn More ></button>
                    </div>
                </div>
            </div>
        
        </div>
        <!-- Canned Info -->
        <div class="row canned_drink_row">
            <div class="col-sm-12">
                <div div class="card item_card">
                    <div  class="card-title">
                        <h1 id="canned_latte_main_title"></h1>
                        <h2 class="drink_description_main" id="canned_latte_main_description"></h2>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" onclick="swap('canned_latte'); swapDBinfo(7); change_flavour(7);">Learn More ></button>
                    </div>
                </div>
            </div>

        </div>

        <!-- What's New Section -->
        
        <!-- OffCanvas Configurations -->
        <div class="offcanvas offcanvas-bottom" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasIced" aria-labelledby="offcanvasIcedLabel">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title" id="offcanvasIcedLabel"></h1>
                <button type="button offcanvas_button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small text-center"> 
            <h2 id="offcanvasIcedDescription"></h2>
            <div class="dropup mt-3">
            <button class="btn btn-secondary dropdown-toggle costa_button" type="button" data-bs-toggle="dropdown">
                Types
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" onclick="swap('iced_latte'); swapDBinfo(1);">Iced Latte</a></li>
                <li><a class="dropdown-item" onclick="swap('iced_latte'); swapDBinfo(2);">Cold Brew</a></li>
                <li><a class="dropdown-item" onclick="swap('iced_latte'); swapDBinfo(3);">Iced Chai Tea Latte</a></li>
            </ul>
            </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-bottom" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasHot" aria-labelledby="offcanvasHotLabel">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title" id="offcanvasHotLabel"></h1>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-center"> 
            <h2 id="offcanvasHotDescription"></h2>
            <div class="dropup mt-3">
            <button class="btn btn-secondary dropdown-toggle costa_button" type="button" data-bs-toggle="dropdown">
                Types
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" onclick="swap('hot_latte'); swapDBinfo(4);">Latte</a></li>
                <li><a class="dropdown-item" onclick="swap('hot_latte'); swapDBinfo(5);">Hot Chocolate</a></li>
                <li><a class="dropdown-item" onclick="swap('hot_latte'); swapDBinfo(6);">Mocha</a></li>
            </ul>
            </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-bottom" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasCanned" aria-labelledby="offcanvasCannedLabel">

            <div class="offcanvas-header">
                <h1 class="offcanvas-title" id="offcanvasCannedLabel"></h1>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small text-center"> 
            <h2 id="offcanvasCannedDescription"></h2>
            <div class="dropup mt-3">
            <button class="btn btn-secondary dropdown-toggle costa_button" type="button" data-bs-toggle="dropdown">
                Types
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" onclick="swap('canned_latte'); swapDBinfo(7);">Canned Latte</a></li>
                <li><a class="dropdown-item" onclick="swap('canned_latte'); swapDBinfo(8);">Canned Caramel Latte</a></li>
                <li><a class="dropdown-item" onclick="swap('canned_latte'); swapDBinfo(9);">Canned Americano</a></li>
            </ul>
            </div>
            </div>
        </div>

        <!-- BootStrap 5 Cards -->
        <div class="row whats_new_row">
            <div class="col-sm-12" style="margin-top:100px">
                <div div class="card item_card">
                    <div class="card-title">
                        <h1 id="What_New_title">What's New</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row what_new_card_row">
            <div class="col-sm-4 what_new_card">
                <div div class="card" id="what_new_card">
                    <img src="application/assets/images/cold_products_slogan.jpg" class="card-img-top" alt="...">
                    <div class="card-title">
                        <h1  id="what_new_iced"></h1>
                    </div>
                    <div class="card-body mini-card-body" >
                        <h2 id="iced_latte_mini_description"></h2>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasIced" role="button" aria-controls="offcanvasIced">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 what_new_card">
                <div div class="card" id="what_new_card">
                    <img src="application/assets/images/hot_products_slogan.jpg" class="card-img-top" alt="...">
                    <div class="card-title">
                        <h1 id="what_new_hot"></h1>
                    </div>
                    <div class="card-body mini-card-body">
                        <h2 id="latte_mini_description"></h2>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button class="costa_button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHot" aria-controls="offcanvasHot" >Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 what_new_card">
                <div div class="card" id="what_new_card">
                    <img src="application/assets/images/canned_products_slogan.jpg" class="card-img-top" alt="...">
                    <div class="card-title">
                        <h1 id="what_new_canned"></h1>
                    </div>
                    <div class="card-body mini-card-body">
                        <h2 id="canned_latte_mini_description"></h2>
                    </div>
                    <div class="card-footer mx-auto justify-content-center">
                        <button  class="costa_button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCanned" role="button" aria-controls="offcanvasCanned">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Other Contents -->


        <!-- X3D Models -->
        <div id="3d_model_content" class="container-fluid main_contents" style="display: none;">

            <!-- Original Content -->
            <div class="row">
                <div div class="card item_card">
                    <div class="card-title card-page-title" >
                        <h1 id="slogan_title_text"></h1>
                        <h2 id="slogan_text"></h2>
                    </div>
                </div>
        </div>
    
        <div class="row" style="padding-top: 50px; margin-bottom:50px">
        <temporary></temporary>
            
            <!-- Future 3d Model-->
            <div class="col-sm-5" >
                <div class="float-container">
                        <div class="float-child dropdown"> 
                            <button class="btn btn-outline-dark btn-responsive dropdown-toggle" type="button" id="dropdown_flavour" data-bs-toggle="dropdown" aria-expanded="false">
                                Flavour
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown_flavour">
                                <div id="iced_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="swapDBinfo(1);">Iced Latte</a></li>
                                    <li><a class="dropdown-item" onclick="swapDBinfo(2);">Cold Brew</a></li>
                                    <li><a class="dropdown-item" onclick="swapDBinfo(3);">Chai Tea Iced Latte</a></li>
                                </div>
                                <div id="hot_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="swapDBinfo(4);">Latte</a></li>
                                    <li><a class="dropdown-item" onclick="swapDBinfo(5);">Hot Chocolate</a></li>
                                    <li><a class="dropdown-item" onclick="swapDBinfo(6);">Mocha</a></li>
                                </div>
                                <div id="canned_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="swapDBinfo(7);">Latte</a></li>
                                    <li><a class="dropdown-item" onclick="swapDBinfo(8);">Caramel Latte</a></li>
                                    <li><a class="dropdown-item" onclick="swapDBinfo(9);">Americano</a></li>
                                </div>
                            </ul>
                        </div>
                            <div class="float-child dropdown"> 
                            <button class="btn btn-outline-dark btn-responsive dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Category 
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div id="iced_drinks_dropdown">
                                    <li><a class="dropdown-item" onclick="swap('iced_latte');   swapDBinfo(1);">Iced Drinks</a></li>
                                    <li><a class="dropdown-item" onclick="swap('hot_latte');    swapDBinfo(4);">Hot Drinks</a></li>
                                    <li><a class="dropdown-item" onclick="swap('canned_latte'); swapDBinfo(7);">Canned Drinks</a></li>
                                </div>
                            </ul>
                        </div>
                </div>

                <div class="model3D x3d-container">
                <x3d id="render"> 
                    <scene>
                        <Switch whichChoice="0" id="sceneSwitch">
                                <!-- Iced Drinks Model -->
                                <transform>
                                    <inline onclick="animateModel()" nameSpaceName="model"  mapDEFToID="true" url="application/assets/x3d/costa_iced_cup/costa_iced_cup.x3d">  </inline>
                                </transform>

                                <!-- Hot Drinks Model -->
                                <transform>
                                    <inline onclick="animateModel()" nameSpaceName="model"  mapDEFToID="true"  url="application/assets/x3d/costa_cup/costa_cup.x3d">  </inline>
                                </transform>

                                <!-- Canned Drinks Model -->
                                <transform>
                                    <inline onclick="animateModel()" nameSpaceName="model"  mapDEFToID="true"  url="application/assets/x3d/costa_can/costa_can.x3d">  </inline>
                                </transform>
                        </Switch>

                                <!-- PlaceHolder information if x3d models need to be regenerated -->

						        <!--<ImageTexture DEF="MA_Material_002_texture" url="costa_latte.png"/>-->

		                        <!-- CONTROLS ROTATION OF THE MODEL __ Cold drink, straw up and down
		                        <timeSensor DEF="time" cycleInterval="2" loop="true" enabled="false"> </timeSensor>
		                        <PositionInterpolator DEF="move" key="0 0.5 1" keyValue="0 0 0  0 0 1  0 0 0"> </PositionInterpolator>       
		                        <Route fromNode="time" fromField ="fraction_changed" toNode="move" toField="set_fraction"> </Route> 
		                        <Route fromNode="move" fromField ="value_changed" toNode="straw" toField="translation"> </Route>  -->

		                        <!-- CONTROLS ROTATION OF THE MODEL __ Hot drink, Cup up and down
		                        <timeSensor DEF="time_cup" cycleInterval="2" loop="true" enabled="false"> </timeSensor>
		                        <PositionInterpolator DEF="move" key="0 0.5 1" keyValue="0 0 0  0 0 1  0 0 0"> </PositionInterpolator>       
		                        <Route fromNode="time_cup" fromField ="fraction_changed" toNode="move" toField="set_fraction"> </Route> 
		                        <Route fromNode="move" fromField ="value_changed" toNode="cup" toField="translation"> </Route>  -->

		                        <!-- CONTROLS ROTATION OF THE MODEL
                                <timeSensor DEF='time_can' cycleInterval='4' loop='true' enabled='false'></timeSensor>
                                <orientationInterpolator DEF='Rotator' key='0 0.25 0.5 0.75 1' keyValue='0 1 0 0 0 1 0 1.57079 0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317'></orientationInterpolator>
                                <ROUTE fromNode='time_can' fromField='fraction_changed' toNode='Rotator' toField='set_fraction'></ROUTE>
                                <ROUTE fromNode='Rotator' fromField='value_changed' toNode='can' toField='set_rotation'></ROUTE> -->

                                <!-- Transparent Background for the scene -->
                                <background skycolor="0 0 0" transparency=1 roundcolor="" groundangle="" skyangle="" backurl="" bottomurl="" fronturl="" lefturl="" righturl="" topurl=""></background>

                                <!-- Lights -->
                                <directionallight id="directional" direction="1 1 1" on="FA" intensity='10.0' shadowintensity="0.0" color="1 1 1" shadowmapsize="1024" znear="-1" zfar="-1" shadowcascades="1" shadowsplitfactor="1" shadowsplitoffset="0.1"></directionallight> 
                                <PointLight id='point' on='FALSE' intensity='5.000' color='1 1 1' location='0 10 0.5 ' radius='20.0000' >  </PointLight> 
                                <SpotLight id='spot' on ="FALSE" beamWidth='0.9' color='1 1 1' cutOffAngle='1' location='0 0 10' radius='90.000' >  </SpotLight> 

                                <NavigationInfo id="head" headlight='false'>  </NavigationInfo> 
                    </scene>
                </x3d>
                </div>
            </div>
    
            <div class="col-sm-7">
                <div class="row">

                <div div class="card mx-auto item_card">
                    <div class="card-title card-latte-title">
                        <h1 id="title_text"></h1>
                    </div>
                    <div class="card-body card-drink-description">
                        <h2 class="drink_description_main" id="drink_description_text"></h2>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="card mx-auto" style="margin:50px">
                    <div class="card-title">
                        <h1 id="gallery_title" style="margin-top:20px;"></h1>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                            <div id="gallery_Row" class="row">
                            </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <!-- Camera Controls -->
                <div class="card controller_card">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-controller active">Camera Viewpoint</a>
                            </li>
                    </div>
                    <div class="card-body">
                          <a class="btn btn-outline-dark btn-responsive" onclick="cameraFront();">Front</a>
                          <a class="btn btn-outline-dark btn-responsive" onclick="cameraBack();">Back</a>
                          <a class="btn btn-outline-dark btn-responsive" onclick="cameraLeft();">Left</a>
                          <a class="btn btn-outline-dark btn-responsive" onclick="cameraRight();">Right</a>
                          <div class="dropdown" style="margin-top: 30px;">
                            <a class="btn btn-outline-dark btn-responsive dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Extra
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" onclick="cameraBottom();">Bottom</a>
                                <a class="dropdown-item" onclick="cameraReset();">Far Away</a>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">

                <!-- Lighting Controls -->
                <div class="card controller_card">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link-controller nav-link active" data-bs-toggle="tab" type="button" role="tab" data-bs-target="#p-light" aria-controls="p-light" aria-selected="true">p-light</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link-controller nav-link" data-bs-toggle="tab" type="button" role="tab" data-bs-target="#s-light" aria-controls="s-light" aria-selected="true">s-light</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link-controller nav-link" data-bs-toggle="tab" type="button" role="tab" data-bs-target="#d-light" aria-controls="d-light" aria-selected="true">d-light</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content text-center">
                    <div class="tab-pane active lights_text" id="p-light">
                            <h2>Point Light</h2>
                            <div class="form-check form-check-inline form-switch">
                                <input class="form-check-input" onclick="lightSwitch('point')" type="checkbox" id="flexSwitchCheckDefault">
                                <br>
                            </div>
                                <p>Pick a color:</p>
                                <input style="border-color:black;width:100%" type="color" id="pointcolor" name="favcolor" value="#ffffff">
                    </div>
                    <div class="tab-pane lights_text" id="d-light">
                        <h2>Directional Light</h2>
                        <div class="form-check form-check-inline form-switch">
                            <input class="form-check-input" onclick="lightSwitch('directional')" type="checkbox" id="flexSwitchCheckDefault">
                            <br>
                        </div>
                            <p>Pick a color:</p>
                            <input style="border-color:black;width:100%" type="color" id="directionalcolor" name="favcolor" value="#ffffff">
                    </div>
                    <div class="tab-pane text-center lights_text" id="s-light">
                        <h2>Spot Light</h2>
                        <div class="form-check form-check-inline form-switch">
                            <input class="form-check-input" onclick="lightSwitch('spot')" type="checkbox" id="flexSwitchCheckDefault">
                            <br>
                        </div>
                            <p>Pick a color:</p>
                            <input style="border-color:black;width:100%" type="color" id="spotcolor" name="favcolor" value="#ffffff">
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">

                <!-- Animation + Render Controls -->
                <div class="card controller_card">
                    <div class="card-header" style="background-color: rgba(177, 249, 251, 0.5);"> 
                        <ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link nav-link-controller active" data-bs-toggle="tab" type="button" role="tab" href="#animation">SFX</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link-controller nav-link" data-bs-toggle="tab" type="button" role="tab" href="#render_tab" >Render</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content card-body">

                        <!-- Animation Controls -->
                        <div class="tab-pane active" id="animation">
                            <div class="text-center lights_text" id="iced_fx" style="display:none;">
                                <h2>Straw Animation</h2>
                                <div class="form-check form-check-inline form-switch">
                                    <input class="form-check-input" onclick="Animate('straw')" type="checkbox" id="flexSwitchCheckChecked">
                                </div>
                                <h2>Ice Animation</h2>
                                <div class="form-check form-check-inline form-switch">
                                    <input class="form-check-input" onclick="Animate('ice')" type="checkbox" id="flexSwitchCheckChecked">
                                </div>
                            </div>
                            <div class="text-center lights_text" id="hot_fx" style="display:none;">
                                <h2>Lift Cup Animation</h2>
                                <div class="form-check form-check-inline form-switch">
                                    <input class="form-check-input" onclick="Animate('hot_drink')" type="checkbox" id="flexSwitchCheckDefault">
                                </div>
                                    <p>Pick a color:</p>
                                    <input style="border-color:black;width:100%" type="color" id="change_cup_color" name="favcolor" value="#AD1035">
                            </div>
                            <div class="text-center lights_text" id="canned_fx" style="display:none;">
                                    <h2>Rotate Can Animation</h2>
                                <div class="form-check form-check-inline form-switch">
                                    <input class="form-check-input" onclick="Animate('canned_drink')" type="checkbox" id="flexSwitchCheckDefault">
                                </div>
                            </div>
                        </div>
                        <!-- Render Controls -->
                        <div class="tab-pane " id="render_tab">
                            <ul class="nav text-center nav-tabs card-header-tabs pull-right" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-dark btn-responsive" onclick="normal();">Normal</a>
                                    <a class="btn btn-outline-dark btn-responsive" onclick="wireFrame();">WireFrame</a>
                                    <a class="btn btn-outline-dark btn-responsive" onclick="vertex();">Vertex</a>
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
                <div div class="card item_card" style="width: 58rem;">
                    <div  class="card-title">
                        <h1>Gallery of our drinks!</h1>
                        <h2> Indulge in your favorites</h2>
                    </div>
                </div>
            </div>
            <br>

            <!-- Carousel for Iced Products -->
            <div class="row">
                <div div class="card item_card" tyle="width: 58rem; padding-top:40px">
                    <div class="card-title">
                        <h1>Costa Iced Products!</h1>
                        <h2>Perfect on a sunny day!</h2>
                    </div>
                </div>
            <!-- Carousel for the Iced products at Costa -->
            <div id="carouselCostaIced" class="carousel slide text-center" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselCostaIced" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselCostaIced" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselCostaIced" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" id="carousel_first"></div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCostaIced" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselCostaIced" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

            <!-- Carousel for Hot Products -->
            <div class="row">
                <div div class="card item_card"  style="width: 58rem; padding-top:40px">
                    <div class="card-title">
                        <h1>Costa Hot Products!</h1>
                        <h2> No need to be cold, drink this! </h2>
                    </div>
                </div>
            <div id="carouselHotProduct" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselHotProduct" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselHotProduct" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselHotProduct" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" id="carousel_second"></div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHotProduct" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHotProduct" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

            <!-- Carousel for Canned Products -->
            <div class="row">
                <div div class="card item_card" style="width: 58rem; padding-top:40px">
                    <div  class="card-title">
                        <h1>Costa Take Away Products!</h1>
                        <h2> Drink your favourites, anywhere!</h2>
                    </div>
                </div>
                <div id="carouselCannedProduct" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselCannedProduct" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselCannedProduct" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselCannedProduct" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                <div class="carousel-inner" id="carousel_third"></div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCannedProduct" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselCannedProduct" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>

        <!-- Contact Us Feature -->
        <div id="contact_us_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card item_card"  style="width: 50rem;">
                    <div class="card-title"  style="text-align: center;">
                        <h1>Have a question about Costa?</h1>
                        <h2> If you can’t find what you’re looking for on our website check out our FAQ’s for the quickest answer. Alternatively, you can reach our Customer Services team by submitting a query through our contact form.</h2>
                    </div>
                    <div class="card-body" style="text-align: center;">
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordion_contact_us">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" id="accordion_button_1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion_contact_us">
                    <div id="accordion_explanation_1" class="accordion-body"></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" id="accordion_button_2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_contact_us">
                    <div id="accordion_explanation_2" class="accordion-body"></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" id="accordion_button_3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"></button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_contact_us">
                    <div class="accordion-body" id="accordion_explanation_3"></div>
                  </div>
                </div>
              </div>
            <div class="row">
                <div div class="card item_card"  style="width: 50rem; padding-top: 30px;">
                    <div class="card-title"  style="text-align: center;">
                    <h1>Contact us directly!</h1>
                    <h2> Please fill in the form with all the information.</h2>
                    </div>
                </div>
            </div>
            <form id="request_form" method="post">
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
                  <button type="submit" class="costa_button btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        
        <!-- Request List Feature -->
        <div id="request_list_content" class="container-fluid main_contents" style="display: none;">
            <div class="row">
                <div div class="card item_card" style="width: 50rem;">
                    <div class="card-title">
                        <h1>Want to see the user requests?</h1>
                        <h2> You've come to the right place! </h2>
                        <h2> You can even remove them with the click of a button! </h2>
                </div>
            </div>
            </div>
            <div class="table-responsive">

            <table class="table text-center  table-bordered" id="request_list_placeholder" style="border-color: black">
                <thead class="table-active">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Remove Request</th>
                    </tr>
                </thead>
                <tbody class="tbody"></tbody>
            </table>
            </div>
        </div>

        <!-- References Page -->
        <div id="going_beyond_content" class="container-fluid main_contetns" style="display: none;">
            <div class="row">
                <div div class="card item_card" style="width: 50rem;">
                    <div class="card-title">
                        <h1>What feature are beyond in this project?</h1>
                        <h2> Here they are: </h2>
                    </div>
                </div>
            </div>
            <div class="going_beyond_list">

            <ul>
            <li>Advanced 3D Model Interaction</li>
                  <ul>
                    <li>Interaction to turn on/off lights of the model</li>
                    <li>Javascript was utilised to allow for changes in the lights colors</li>
                    <li>Javascript was utilised to allow for changes in the material colors for the hot drinks model</li>
                  </ul>
                <li>The X3D models are more complex</li>
                <ul>
                    <li>Use of html5 to change values of the x3d models</li>
                    <li>Use of jQuery to modify the light sources of the x3d models</li>
                    <li>Integration with bootstrap to add Toasts when a specific material is clicked.</li>
                    <li>Three Unique animations are given, one for each of the model.</li>
                    <li>The 3D models all have unique components</li>
                    <ul>
                        <li>Iced Drinks: They have multiple Ice Cubes, a Straw, realistic liquid and accurate top cup.</li>
                        <li>Hot Drinks: The cup is designed after the official cup utilsied by Costa.</li>
                        <li>Canned Drinks: Textures have been created by me manually, the top of the can has the following details</li>
                        <ul>
                            <li>3D Modelled Pull Tab</li>
                            <li>3D Modelled Tear Line and Tear Strip</li>
                        </ul>
                    </ul>
                </ul>
                <li>Use of Bootstrap 5, which allows for the creation of accordion (see the Contact Us Page), and the creation of OffCanvas sidebars</li>
                <ul>
                    <li>Use of Accordions</li>
                    <li>Use of OffCanvas sidebars</li>
                    <li>Use of Toasts, used to check the material when clicking on a material on the x3d model</li>
                </ul>
                <li>Request Feature (CRUD)</li>
                <ul>
                    <li>Create a request to be sent to the database</li>
                    <li>Read the list of requests</li>
                    <li>Add and update comments for individual requests</li>
                    <li>Delete specific request</li>
                </ul>
                <li>Updated MVC method</li>
                  <ul>
                      <li>Added a number of API and DB functions to improve information extraction from the DB</li>
                      <li>Specifically, to add information to the DB automatically, a DB function was created (alongside API, called apiinsertdata) where the data.json is read, and information is inserted where appropriate.</li>
                      <li>More advanced AJAX calls to the controller were created to extract specific information from the DB</li>
                      <li>Most of the information on the website has been inserted inside of the DB, this was done by creating more approrpiate DB tables</li>
                  </ul>
                <li>I have explored other 3D Content authoring packages besides 3ds Max to create my 3D models, in the case of this project, Blender was used.</li>
                <li>I have created an alternative export workflow for my 3D Models using Blender => X3D => X3DOM</li>
                <ul>
                    <li>Manually set up color, transparency and metalness for x3D model </li>
                    <li>Manually inspected correct material to insert correct texture to the x3d model</li>
                    <li>Created animations by understanding the .x3d files and inserting appropriate nodes to move specific objects</li>
                </ul>
                <li>Photorealistic Renders of the 3d Objects (seen in the gallery)</li>
                <ul>
                    <li>Specific Shader Nodes used to replicate materials (such as the plastic cups in the iced drinks)</li>
                    <li>Smoke Simulation was Baked into the model for realistic steam.</li>
                    <li>Used 4k HDRI backdrops for realistic lighting</li>
                    <li>Used 4k Textures for approrate recreate of other materials, such as the table</li>
                </ul>
                <li>Advanced usage of CSS</li>
                <ul>
                    <li>Use of CSS was deeply expanded from the Labs</li>
                    <li>Use of variables to make an effective light mode and dark mode for the website</li>
                    <li>Background created dynamically via CSS</li>
                    <li>Bootstrap CSS was overwritten to maintain the theme of red (from Costa)</li>
                </ul>
            </ul> 
            </div>
        </div>

        <div id="references_content" class="container-fluid main_contetns" style="display: none;">
            <div class="row">
                <div div class="card item_card" style="width: 50rem;">
                    <div class="card-title">
                        <h1>Reference List</h1>
                    </div>
                </div>
            </div>
            <div class="going_beyond_list">
            <ul>
                <li>3D Renders</li>
                <ul>
                    <li>Hot Drinks</li>
                    <ul>
                        <li>Textures</li>
                        <ul>
                            <li>Polystirene: https://polyhaven.com/a/polystyrene</li>
                            <li>Asphalt Snow: https://polyhaven.com/a/asphalt_snow</li>
                            <li>Red Stone Pavement: https://polyhaven.com/a/red_sandstone_pavement</li>
                        </ul>
                        <li>HDR</li>
                        <ul>
                            <li>Snowy Cemetery: https://polyhaven.com/a/snowy_cemetery</li>
                            <li>Vignaioli Night: https://polyhaven.com/a/vignaioli_night</li>
                            <li>Interior Consturction: https://polyhaven.com/a/interior_construction</li>
                        </ul>
                    </ul>
                    <li>Canned Drinks</li>
                    <ul>
                        <li>Textures</li>
                        <ul>
                            <li>Wooden Planks: https://polyhaven.com/a/wooden_planks</li>
                            <li>Fabric Pattern 07: https://polyhaven.com/a/fabric_pattern_07</li>
                            <li>Snow 02: https://polyhaven.com/a/snow_02</li>
                        </ul>
                        <li>HDR</li>
                        <ul>
                            <li>Little Paris Eiffel Tower: https://polyhaven.com/a/little_paris_eiffel_tower</li>
                            <li>Scythian Tombs 2: https://polyhaven.com/a/scythian_tombs_2</li>
                            <li>Blaubeuren Church Square: https://polyhaven.com/a/blaubeuren_church_square</li>
                        </ul>
                    </ul>
                </ul>
                <li>Costa</li>
                <ul>
                    <li>Costa Information: https://www.costa.co.uk</li>
                    <li>Costa Logo: https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS79uPSvhFx-BQEVPaek44rM02t6tCAEMGp7pnciDx2&s</li>
                    <li>Carrion Information: https://www.costa.co.uk/contact-form</li>
                    <li>Costa About Me: https://www.costa.co.uk/behind-the-beans/our-story/history</li>
                </ul>
                <li>Mini Cards Thumbnails (Main Page)</li>
                <ul>
                    <li>Iced Drinks: https://willowbrookshopping.co.uk/wp-content/uploads/2022/06/summer-frappe-icedlatte-range-promo-696x512-1.jpg</li>
                    <li>Hot Drinks: https://images.ctfassets.net/royi30b2qd26/78766uHKdvKc0tobv9U3Dk/2f24192e12a7bbffad18aa5cead6d399/cwc-cups-and-packaging-takeaway-cup-with-lid-rich-text-684x400.jpg</li>
                    <li>Canned Drinks: https://images.ctfassets.net/royi30b2qd26/19ixNdJRC4p1gwzFensSxY/66a5aa497f158daaf23f011291b8913c/rtd-22-latte-promo-NEW-696x512.jpg?w=700&h=515&fl=progressive&q=50&fm=jpg</li>
                </ul>
                <li>Code Inspiration</li>
                <ul>
                    <li>Dark Mode: https://lukelowrey.com/css-variable-theme-switcher/</li>
                    <li>Wavy CSS background: https://css-tricks.com/how-to-create-wavy-shapes-patterns-in-css/</li>
                </ul>
            </ul>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once("footer.html"); ?>

        <!-- JQuery -->
        <script src="application/js/jquery-3.6.4.min.js" crossorigin="anonymous"></script>

        <!-- Fancybox -->
        <script src="application/js/jquery.fancybox.min.js" crossorigin="anonymous"></script> 

        <!-- Popper -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>

        <!-- X3D -->
        <script src="application/js/x3dom/x3dom.js" crossorigin="anonymous"></script> 

        <!-- Bootstrap -->
        <script src="application/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <!-- Fontawesome -->
        <script src="application/js/fontawesome-all.min.js" crossorigin="anonymous"></script>

        <!-- Custom Javascript -->

        <!-- Javascript functions used for the request feature (CRUD)-->
        <script src="application/js/request_table_functions.js"></script>

        <!-- Any function that require document.ready() (tooltip + fancybox)-->
        <script src="application/js/doc_ready_functions.js"></script>

        <!-- Javascript function to add all general information to the table !-->
        <script src="application/js/getJsondata.js"></script>

        <!-- Javascript functions for swapping of content in the SPA -->
        <script src="application/js/swap_functions.js"></script>

        <!-- Javascript functions for interactions with the 3d Model -->
        <script src="application/js/3d_model_interaction.js"></script>

        <!-- Javascript functions for changes in the lighting of the 3d Model-->
        <script src="application/js/color_functions.js"></script>

    </body>
</html>