<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- style -->
    <link href="<?=base_url();?>Assets/css/styles1.css" rel="stylesheet" />

    <!-- fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>Assets/images/logo1.png">


</head>

<body>
    <!-- Header Main  -->
    <div class="header-main">
        <!-- Top Bar  -->
        <div class="top-bar d-none d-sm-none d-md-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-4 col-7">
                        <div class="top-bar-left d-flex">
                            <div class="clearfix">
                                <ul class="socials">
                                    <li>
                                        <a class="social-icon text-dark" href="javascript:void(0)">
                                            <i class="fa-brands fa-facebook-f" style="color: #3b5998;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="javascript:void(0)">
                                            <i class="fa-brands fa-twitter" style="color: #1DA1F2;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="javascript:void(0)">
                                            <i class="fa-brands fa-linkedin-in" style="color: #0A66C2;"></i>
                                        </a>
                                    </li>
                                    <li class="ls1">
                                        <a class="social-icon text-dark " href="javascript:void(0)">
                                            <i class="fa-brands fa-instagram" style="color: #E4405F;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-8 col-5">
                        <div class="top-bar-right d-flex justify-content-end">
                            <div>
                                <a href="<?=base_url();?>Assets/JBFapp.apk" download>
                                    <img src="<?=base_url();?>Assets/images/Play_store_logo.png" alt=""
                                        style="height: 40px; padding-right: 10px;cursor:pointer">
                                </a>
                            </div>

                            <ul class="custom">
                                <li>
                                    <!-- <a class="text-dark" target="_blank" href="https://www.app.jainbusinessforum.com/RegistrationInfo"> -->
                                    <i class="fa-solid fa-user fa-sm me-1"
                                        style="color: #23376c; padding-top: 10px;"></i>
                                    <span>Register</span>
                                    </a>
                                </li>
                                <li class="ls2">
                                    <!-- <a class="text-dark" target="_blank" href="https://www.app.jainbusinessforum.com/login"> -->
                                    <i class="fa-solid fa-right-to-bracket fa-sm  me-1"
                                        style="color: #23376c; padding-top: 10px;"></i>
                                    <span>Login</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of Top Bar  -->
        <!-- Header Serach  -->
        <header class="header-search border-bottom p-2 bg-white d-none d-sm-none d-md-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 col-md-12">
                        <div class="header-search-logo d-none d-lg-block">
                            <div class="desktoplogo">
                                <a href="javascript:void(0)">
                                    <img src="<?=base_url();?>Assets/images/logo1.png" alt="" style="height: 66px;">
                                    <div class="d-block">
                                        <h1>Jain Business Forum</h1>
                                        <h6 class="text-end" style="font-weight: 600;">जैन बिझनेस फोरम </h6>
                                    </div>


                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-md-12 header-support">
                        <ul class="hor-support float-end">
                            <li class="support-header d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fa-solid fa-phone fa-sm" style="color: #23376c;"></i>
                                    <div class="support-text">
                                        <h6><a href="tel:+91-91 98221 32222"> +91-91 98221 32222</a></h6>
                                        <p>24/7 available services </p>
                                    </div>
                                </a>
                            </li>
                            <li class="support-header d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fa-solid fa-envelope fa-sm" style="color: #23376c;"></i>
                                    <div class="support-text">
                                        <h6><a href="mailto:help@jainbusinessforum.com">help@jainbusinessforum.com</a>
                                        </h6>
                                        <p>Ask For any questions</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- end of Header search  -->

        <!-- Horizontal Menu  -->
        <div class="d-flex justify-content-between container hrz d-lg-block d-md-none d-sm-none d-none">
            <div class="">
                <nav class=" navbar custom_nav-container">

                    <ul class="navbar-nav d-flex" style="flex-direction: row;">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url();?>Project">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="Project/about">About Us</a> -->
                            <a class="nav-link" href="<?=base_url();?>Project/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="Project/categories">Categories</a> -->
                            <a class="nav-link" href="<?=base_url();?>Project/categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url();?>Project">Events</a>
                        </li>
                        <!-- <li class="nav-item">
              <a class="nav-link" href="https://www.jainbusinessforum.com/Gallery">Gallery</a>
            </li> -->
                        <li class="nav-item contact-us myli">
                            <!-- <a class="nav-link" href="Project/contact_us">Contact Us</a> -->
                            <a class="nav-link" href="<?=base_url();?>Project/contact_us">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End of Horizontal Menu-->

    </div>

    <!-- end of main bar  -->
    <div class="d-block d-sm-block d-md-block d-lg-none">
    <div class="px-3" id="offcanvas">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a class="navbar-brand " href="javascript:void(0)">
                    <img id="logo" src="<?=base_url();?>Assets/images/logo1.png" alt=""
                        style="height: 66px;">
                </a>
            </div>

            <div>

                <a href="https://www.jainbusinessforum.com/Assets/JBFapp.apk" download>
                    <img src="<?=base_url();?>Assets/images/Play_store_logo.png" alt=""
                        style="height: 40px; padding-right: 10px;cursor:pointer"></a>
            </div>


            <div>
                <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#demo1">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start" id="demo1">
        <div class="offcanvas-header">
            <a class="navbar-brand" href="javascript:void(0)">
                <img id="logo2" src="<?=base_url();?>Assets/images/logo1.png" alt=""
                    style="height: 92px;">
            </a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body ml-2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " href="<?=base_url();?>Project">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>Project/about">About Us</a>
                </li>
                <li class="nav-item contact-us myli">
                    <a class="nav-link" href="<?=base_url();?>Project/categories">Catgories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>Project">Events</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="https://www.jainbusinessforum.com/Gallery">Gallery</a>
                  </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>Project/contact_us">Contact Us</a>
                </li>
                <li> <br>
                    <a class="text-dark" target="_blank" href="https://www.app.jainbusinessforum.com/RegistrationInfo">
                        <i class="fa-solid fa-user fa me-1" style="color: #1c46c5; padding-top: 5px;"></i>
                        <span>Register</span>
                    </a>
                </li><br>
                <li>
                    <a class="text-dark" target="_blank" href="https://www.app.jainbusinessforum.com/login">
                        <i class="fa-solid fa-right-to-bracket fa me-1" style="color: #1c46c5; padding-top: 5px;"></i>
                        <span>Login</span>
                    </a>
                </li><br>

            </ul>
        </div>
    </div>
</div>

<!-- offcanvas sidebar  -->
<style>
.carousel-control-prev,
.carousel-control-next {
    /* filter: invert(100%);  */
    opacity: 1 !important;

}
</style>