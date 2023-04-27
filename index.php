<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login_register.php");
}
?>
<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&family=Lato&family=Nanum+Gothic:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div id="background">

        <!-- Header -->

        <div id="header">
            <div id="header-left">
                <div id="line" style="opacity:0.1;"></div>
            </div>
            <div id="header-mid">
                <p id="p1" style="font-family: 'Nanum Gothic', sans-serif;font-weight:700;">We create websites and applications </p>
                <p id="p2" style="font-family: 'Karla', sans-serif;color:#459ff9;">Vestibulum dapibus, mauris nec maulisauda fames</p>
                <a href="services.php">
                    <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="1.2vw" height="1.2vw" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a>
            </div>
            <div id="header-right">
                <img src="images/home_webdeveloper_slider_pic1.png" alt="webdeveloper_slider">
            </div>
        </div>
    </div>

    <!-- Services -->

    <div id="services_bg">
        <div id="services">
            <div class="bigger_elements">
                <div style="padding:25px;">
                    <div class="smaller_elements">
                        <center><img src="images/home_webdeveloper_pic1.png" alt="" class="img1" style="width:8vw"></center>
                        <h2 style="font-size:2.5vw;">Web Development</h2>
                        <img src="images/home_webdeveloper_pic5.png" alt="" class="img2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit hic fuga dignissimos quas aperiam!</p>
                        <a href="#">
                            <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #52eac8;margin-left: 10px;">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </a>
                        <img src="images/home_webdeveloper_pic19.png" alt="" class="img3">
                    </div>
                </div>
                <div style="padding:25px;">
                    <div class="smaller_elements">
                        <center><img src="images/home_webdeveloper_pic2.png" alt="" class="img1" style="width:8vw"></center>
                        <h2 style="font-size: 2.5vw;">Mobile Development</h2>
                        <img src="images/home_webdeveloper_pic5.png" alt="" class="img2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit hic fuga dignissimos quas aperiam!</p>
                        <a href="#">
                            <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #52eac8;margin-left: 10px;">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </a>
                        <img src="images/home_webdeveloper_pic19.png" alt="" class="img3">
                    </div>
                </div>
            </div>

            <div class="bigger_elements">
                <div style="padding:25px;">
                    <div class="smaller_elements">
                        <center><img src="images/home_webdeveloper_pic3.png" alt="" class="img1" style="width:8vw"></center>
                        <h2 style="font-size:2.5vw;">Product Design</h2>
                        <img src="images/home_webdeveloper_pic5.png" alt="" class="img2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit hic fuga dignissimos quas aperiam!</p>
                        <a href="#">
                            <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #52eac8;margin-left: 10px;">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </a>
                        <img src="images/home_webdeveloper_pic19.png" alt="" class="img3">
                    </div>
                </div>
                <div style="padding:25px;">
                    <div class="smaller_elements">
                        <center><img src="images/home_webdeveloper_pic4.png" alt="" class="img1" style="width:8vw"></center>
                        <h2 style="font-size:2.5vw;">System Coding</h2>
                        <img src="images/home_webdeveloper_pic5.png" alt="" class="img2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit hic fuga dignissimos quas aperiam!</p>
                        <a href="#">
                            <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #52eac8;margin-left: 10px;">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </a>
                        <img src="images/home_webdeveloper_pic19.png" alt="" class="img3">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section1 -->

    <div id="section1">
        <div id="inner_section1">
            <img src="images/home_webdeveloper_pic20.png" alt="">
        </div>
        <div id="inner_section2">
            <img src="images/home_webdeveloper_pic6.png" alt="">
            <p id="p1" style="font-family:lato;font-weight:600;color:#1b1b4f;">Vesti bulum Commodo</p>
            <p style="margin-top: 36px;color: #5774bd;font-family: lato;font-weight: 400;">— Eiusmod tempor incididunt ut labore</p>
            <p style="margin-top: 32px;color: #78788c;font-family: lato;font-weight: 300;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, nobis!</p>
        </div>
    </div>

    <!-- Section2 -->

    <div id="section2">
        <div id="inner_section1">
            <img src="images/home_webdeveloper_pic7.png" alt="">
            <p id="p1" style="font-family:lato;font-weight:600;color:#1b1b4f;">Vesti bulum Commodo</p>
            <p style="margin-top: 36px;color: #5774bd;font-family: lato;font-weight: 400;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, nobis!</p>
            <p style="margin-top: 32px;color: #78788c;font-family: lato;font-weight: 300;">ulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu,</p>
        </div>
        <div id="inner_section2">
            <img src="images/home_webdeveloper_pic10.png" alt="">
        </div>

    </div>

    <!-- Section3 -->

    <div id="section3">

        <div id="inner_section1">
            <img src="images/home_webdeveloper_pic11.png" alt="">
        </div>
        <div id="inner_section2">
            <img src="images/home_webdeveloper_pic8.png" alt="">
            <p id="p1" style="font-family:lato;font-weight:600;color:#1b1b4f;">Vesti bulum Commodo</p>
            <p style="margin-top: 36px;color: #5774bd;font-family: lato;font-weight: 400;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, nobis!</p>
            <p style="margin-top: 32px;color: #78788c;font-family: lato;font-weight: 300;">Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus.</p>
        </div>
    </div>

    <!-- Section4 -->

    <div id="section4">
        <p style="font-family: 'Nanum Gothic', sans-serif;color:white;font-size: 50px;">Nulla imperdiet sit amet</p>
        <center>
            <p style="font-family: 'Karla', sans-serif;color:#717198;font-weight:300;max-width:700px;margin-top: 30px;">Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices.</p>
        </center>

        <div id="inner_section1">
            <div>
                <center><img src="images/home_webdeveloper_pic12.png" alt="" style="position:relative;top:75px;"></center>
                <div class="inner_small_section" style="border:4px solid #986cff;">
                    <div style="text-align: center;color: #986cff;font-family: lato;font-weight: 200;">90+</div>
                    <h2 style="color:white;text-align: center;font-family: karla;">Happy Clients</h2>
                </div>
            </div>
            <div>
                <center><img src="images/home_webdeveloper_pic13.png" alt="" style="position:relative;top:75px;"></center>
                <div class="inner_small_section" style="border:4px solid #5e5ac6;">
                    <div style="text-align: center;color: #986cff;font-family: lato;font-weight: 200;">100+</div>
                    <h2 style="color:white;text-align: center;font-family: karla;">Team Members</h2>
                </div>
            </div>
            <div>
                <center><img src="images/home_webdeveloper_pic14.png" alt="" style="position:relative;top:75px;"></center>
                <div class="inner_small_section" style="border:4px solid #3fddba;">
                    <div style="text-align: center;color: #986cff;font-family: lato;font-weight: 200;">12+</div>
                    <h2 style="color:white;text-align: center;font-family: karla;">Years In Business</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Section5 -->

    <div id="section5">
        <div id="inner_section1">
            <div id="inner_small_section1">
                <h1 style="font-family:lato;font-weight:600;color:#1b1b4f;">Case Studies</h1>
                <div style="margin-top: 3vw;color: #5774bd;font-family: lato;font-weight: 400;">— Nullam wisi ultricies</div>
                <p style="margin-top: 3vw;color: #78788c;font-family: lato;font-weight: 300;">Lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis varius.</p>
            </div>
            <div id="inner_small_section2">
                <img src="images/home_webdeveloper_pic15.png" alt="">
            </div>
        </div>
        <div id="inner_section2">
            <div id="inner_small_section1">
                <img src="images/home_webdeveloper_pic16.png" alt="" style="width:50vw;">
            </div>
            <div id="inner_small_section2">
                <p style="line-height: 2.2vw;font-weight:300;color:white;font-family:karla;padding:50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>

                <div style="display: flex;padding:0px 5vw;"><img src="images/home_webdeveloper_pic17.png" style="width: 2vw;height:1.6vw;">
                    <p style="color: #7d7da4;padding-left: 10px;margin-bottom: 20px;font-family: karla;font-weight: 900;">Duis aute irure dolor in reprehenderit</p>
                </div>

                <div style="display: flex;padding:0px 5vw;"><img src="images/home_webdeveloper_pic17.png" style="width: 2vw;height:1.6vw;">
                    <p style="color: #7d7da4;padding-left: 10px;margin-bottom: 20px;font-family: karla;font-weight: 900;">In voluptate velit esse cillum</p>
                </div>

                <div style="display: flex;padding:0px 5vw;"><img src="images/home_webdeveloper_pic17.png" style="width: 2vw;height:1.6vw;">
                    <p style="color: #7d7da4;padding-left: 10px;margin-bottom: 20px;font-family: karla;font-weight: 900;">Excepteur sint occaecat cupidatat</p>
                </div>

                <div style="display: flex;padding:0px 5vw;"><img src="images/home_webdeveloper_pic17.png" style="width: 2vw;height:1.6vw;">
                    <p style="color: #7d7da4;padding-left: 10px;margin-bottom: 20px;font-family: karla;font-weight: 900;">Sunt in culpa qui officia deserunt</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        var logoutbtn = document.getElementById("logoutbtn");
        var logoutsvg = document.getElementById("logoutsvg");
        logoutsvg.onclick = function() {
            if (logoutbtn.style.display == "none") {
                logoutbtn.style.display = "block";
            } else {
                logoutbtn.style.display = "none";
            }
        };
    </script>
</body>

</html>
<?php include "footer.php"; ?>