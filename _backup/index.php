<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="horizontal-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Antrian</title>

    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" /> 
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />  

 
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/vendor/js/jquery.js"></script>
    <style>
 
        .layout-wrapper {
            background-image: url('assets/img/background.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden; 
        }
        .tabelnew {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #f2f5f7;
            
        }
         
        .tabelnew tr th{
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }
         
        .tabelnew, th, td {
            padding: 10px 20px;
            text-align: left;
        }
         
        .tabelnew tr:hover {
            background-color: #f5f5f5;
        }
         
        .tabelnew tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #myname{
            display: none; 
        } 

    </style>

 
</head>

<body>

    <div style="position: relative;z-index: 101; width: 243px;height: 121px;top: 0px; background-color: #16a44a;display: flex;justify-content: center;padding: 5px;">
        <img src="assets/img/logo1.png" style="width:auto;">
    </div>
    <div>
        <h2  style="position: fixed;z-index: 102;color:#fff;top: 5px;left: 200px;"><b  style="color:#fff;" id="namars"></b>❤️
        </h2>
    </div>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme bg-primary bg-gradient" id="layout-navbar" style="position: fixed;z-index: 99;">
                <div class="container-xl ">
                    <div class="navbar-brand app-brand demo">
                        <!-- <a href="index.html" class="app-brand-link gap-1">
                            <span class="app-brand-logo demo"> 
                                <img src="">
                            </span>
                            <span class="app-brand-text demo menu-text fw-bold">
                            <h4  style="color:#fff;"><b  style="color:#fff;" id="namars"></b>
                            </h4>
                        </span>
                        </a>  -->
                    </div> 
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <h4 style="color:#fff;"  ><i class="fa far fa-clock "></i>
                            <b id="clock">-</b></h4>
                        </ul>
                    </div>

                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->

                    <!-- / Menu -->

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                                    
                        <!-- Video -->
                        <div class="col-4 mb-1" style="position:fixed;z-index:100;width:400px;right:240px;bottom:65px;">
                            <div class="card ">                                   
                                <!--<video-->
                                <!--id="myVideo"-->
                                <!--  class="w-100" -->
                                <!--  playsinline -->
                                <!--  autoplay> -->
                                <!--</video> -->
                                    <video id="myVideoRS" autoplay loop playsinline>
                                    <!--<source src="cat-herd.webm" type="video/webm" />-->
                                    <source src="video/vid-0.MP4" type="video/MP4" />
                                    <!-- <source src="video/vid-1.mp4" type="video/mp4" />
                                    <source src="video/vid-2.mp4" type="video/mp4" />
                                    <source src="video/vid-4.mp4" type="video/mp4" />
                                    <source src="video/vid-5.mp4" type="video/mp4" />
                                    <source src="video/vid-6.mp4" type="video/mp4" />
                                    <source src="video/vid-7.mp4" type="video/mp4" />
                                    <source src="video/vid-8.mp4" type="video/mp4" />
                                    <source src="video/vid-9.mp4" type="video/mp4" /> -->
                                  </video>
                            </div>
                          </div> 
                          <div class="col-4 mb-1" style="position:fixed;z-index:100;left: 235px;top:63px;">
                                    <video id="myVideoRS2" autoplay loop playsinline width="800" height="505">
                                    <source src="video/rsiarestuibu.MP4" type="video/MP4" />
                                    </video>

                                    <!-- Youtube -->
                                    <!-- <iframe id="myVideoYT" width="830" height="505" src="https://www.youtube.com/embed/DOOrIxw5xOw?si=yQq5OgLxsFnpczqM?rel=0&vq=hd480&modestbranding=1&autohide=1&showinfo=0&controls=1&autoplay=1&mute=1" title="YouTube video player" allow="autoplay" frameborder="0" allowFullScreen></iframe> -->
                                    <!-- END Youtube -->
                          </div> 
                          <!-- <div class="container-fluid" id="data" style="margin-top: -40px;position: fixed;">
                        </div> -->
                          <div class="col-lg-8 mb-1 text-center " style="position: fixed;top:70px;right:0px;width: 880px;height: 950px;">
                                <div class="card h-100 border border-primary mb-3"> 
                                <div class="card"><h4>JADWAL PRAKTER DOKTER</h4>
                                </div>
                                    <div class="card-body"> 
                                        <h6 class="mb-0  mt-0" id="datatabeldokter"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px;">
                            <!-- Nomor yang tampil besar -->
                            <div class="col-lg-2 mb-1 text-center " style="margin-top: 25px;position: fixed;left:0px;top:550px;width: 250px;height: 885px;font-size:0.2rem;">
                                <div class="card h-50 border border-primary mb-3"> 
                                <div class="card" style="background-color: #35A9DB;"><h4 style="color: white;">ANTRIAN FARMASI</h4>
                                </div>
                                    <div class="card-body"> 
                                        <h4 id="nomorfarmasi"></h4>
                                        <!--style="font-size:0.2rem;"-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 mb-1 text-center " style="margin-top: 25px;position: fixed;left:0px;top:102px;width: 250px;height: 885px;">
                                <div class="card h-50 border border-primary mb-3"> 
                                <div class="card" style="background-color: #35A9DB;"><h4 style="color: white;">ANTRIAN POLI</h4>
                                </div>
                                    <div class="card-body"> 
                                        <h4 class="mb-0  mt-2" style="font-size:0.2rem;" id="nomor"></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 mb-1 text-center " style="margin-top: 25px;position: fixed;left:230px;top:550px;width: 250px;height: 885px;font-size:0.2rem;">
                                <div class="card h-50 border border-primary mb-3"> 
                                <div class="card" style="background-color: #35A9DB;"><h4 style="color: white;">LOKET KASIR</h4>
                                </div>
                                    <div class="card-body"> 
                                        <h4 id="nomorkasir"></h4>
                                        <!--style="font-size:0.2rem;"-->
                                    </div>
                                </div>
                            </div>
                            <!--/ Nomor yang tampil besar --> 
                            <div class="col-lg-6 text-center " style="margin-top: 25px;position: fixed;left:460px;top:550px;width: 600px;height: 460px;">
                                <div class="card h-100 border border-primary"> 
                                <div class="card"><h4>DAFTAR RUANG RAWAT INAP</h4>
                                </div>
                                    <div class="card-body" style="position:fixed;width: 580px;top: 585px;"> 
                                        <h6 class="mb-0  mt-0" id="datatabelkamar"></h6>
                                    </div>
                                </div>
                            </div>  
                        </div> 

            </div>
<!--/ Content -->
            



                    <!-- Footer -->

                    <footer class="content-footer footer bg-footer-theme bg-info bg-gradient">
                        <div
                          class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-2"
                        >
                        
                        <div class="col-11 "> <marquee><b class="text-white h3" id="text" ></b></marquee>
                        </div>
                        
                        <div class="col-1" style="display: flex;justify-content: center;">  
                            <a id="myname"></a> 
                            <a>Made by Andeska 👈</a>        
                          </div>

                          
                          
                        </div>
                      </footer>
                       
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
        </div>
    </div>

    <audio id="myAudio" src="assets/notif.mp3" ></audio> 

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
    <!-- Core JS -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="app/antrian.js"></script>     
    <!-- <script src="assets/responsivevoice.js?key=WfWmvaX0"></script> -->
    <script src="assets/responsivevoice.js?key=Qydmodn3"></script>
    <!-- <script src="https://code.responsivevoice.org/responsivevoice.js?key=Qydmodn3"></script> -->
    <script src="assets/vendor/js/theme.js"></script> 
    <script type="text/javascript"> 
        var auto_refresh = setInterval( function() { 
            $('#datatabeldokter').load('tabeldokter.php').fadeIn("slow"); }, 5000);
        var auto_refresh = setInterval( function() { 
       		$('#datatabelkamar').load('tabelkamar.php').fadeIn("slow"); }, 5000); 
        document.getElementById("myVideoRS").volume = 0.0;
        document.getElementById("myVideoRS2").volume = 0.0;
        document.getElementById("myVideoYT").volume = 0.2;
    </script>
</body>
</html>