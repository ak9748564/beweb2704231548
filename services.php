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
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&family=Lato&family=Montserrat:wght@100,200,300,400,500,600,700,800,900&family=Nanum+Gothic:wght@400;800&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <title>Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #section1 {
            background-image: url('images/home_webdeveloper_subheaderbg1.jpg');
            width: 100vw;
            height: 42vw;
            background-position: center top;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #services{
            display: flex;
        }
        #services .smaller_elements{
            padding: 25px;
        }

        #section1 h1 {
            font-size: 65px;
            line-height: 65px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            color: white;
        }

        #section2 #inner_section1 {
            padding: 100px 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 600;
            font-size: 17px;
            line-height: 27px;
        }

        #section2 #inner_section1 .inner_small_section {
            width: 25%;
            padding: 50px;
        }

        #section3s {
            background-image: url('images/home_webdeveloper_sectionbg1.png');
            background-position: center top;
            padding: 100px 50px;
        }
        #section2 #inner_section1 .inner_small_section div{
                /* width: 110px; */
            }
            #section3s #inner_section1s{
                display: flex;
            }
            #section3s #inner_section1s #inner_small_section1s{
                width: 50%; 
            }
            #section3s #inner_section1s #inner_small_section2s{
                width: 50%;
                display: flex;
            }
            #section3s #inner_section1s #inner_small_section2s div{
                width: 50%;
                padding:25px;
            }
        @media(max-width:1050px){
            #services{
    display: block;
            }
            #services .smaller_elements{
                max-width: 500px;
                margin: auto;
            }
            #section2 #inner_section1{
                display: block;
                margin: auto;
            }
            #section2 #inner_section1 .inner_small_section{
                margin: auto;
                width: 100%;
            }
            #section2 #inner_section1 .inner_small_section div{
                width: 250px;
            }
            #section3s #inner_section1s{
                display: block;
                width: 100%;
            }
            #section3s #inner_section1s #inner_small_section1s{
                width: 100%;
            }
            #section3s #inner_section1s #inner_small_section2s{
                display: block;
                width: 100%;
            }
            #section3s #inner_section1s #inner_small_section2s div{
                display: block;
                width: 80%;
                margin: auto;
            }
        }
    </style>
</head>

<body style="background:#edf2ff;">

<!-- Section1 -->

    <div id="section1">
        <h1>Services</h1>
    </div>

    <!-- Services  -->

    <div id="services" style="background-image:none;padding:100px 25px;">
        <div class="smaller_elements" style="top:30px;box-shadow:none;">
            <img src="images/home_webdeveloper_pic1.png" alt="" class="img1">
            <h2>Web Development</h2>
            <img src="images/home_webdeveloper_pic5.png" alt="" class="img2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit hic fuga dignissimos quas aperiam!</p>
            <a href="#">
                <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #52eac8;margin-left: 10px;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
            <img src="images/home_webdeveloper_pic19.png" alt="" class="img3">
        </div>
        <div class="smaller_elements" style="top:30px;box-shadow:none;">
            <img src="images/home_webdeveloper_pic2.png" alt="" class="img1">
            <h2>Mobile Development</h2>
            <img src="images/home_webdeveloper_pic5.png" alt="" class="img2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit hic fuga dignissimos quas aperiam!</p>
            <a href="#">
                <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #52eac8;margin-left: 10px;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
            <img src="images/home_webdeveloper_pic19.png" alt="" class="img3">
        </div>

        <div class="smaller_elements" style="top:30px;box-shadow:none;">
            <img src="images/home_webdeveloper_pic3.png" alt="" class="img1">
            <h2>Product Design</h2>
            <img src="images/home_webdeveloper_pic5.png" alt="" class="img2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit hic fuga dignissimos quas aperiam!</p>
            <a href="#">
                <p>Read More</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #52eac8;margin-left: 10px;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
            <img src="images/home_webdeveloper_pic19.png" alt="" class="img3">
        </div>
        <div class="smaller_elements" style="top:30px;box-shadow:none;">
            <img src="images/home_webdeveloper_pic4.png" alt="" class="img1">
            <h2>System Coding</h2>
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

    <!-- Section2 -->

    <div id="section2" style="background-image: none;display:flex;flex-wrap:wrap;justify-content:center;align-items:center;background:#edf2ff;">
        <div style="width:219px;"><img src="images/home_webdeveloper_services1.png" alt=""></div>
        <h1 style="font-size: 35px;line-height: 45px;font-family: Arial, Helvetica, sans-serif;font-weight: 600;color: #1b1b4f;width:100%;text-align:center;">Working Process</h1>
        <div style="font-size: 16px;line-height: 26px;font-family: Arial, Helvetica, sans-serif;font-weight: 300;color: #78788c;text-align:center;width:60%;background:#edf2ff;margin:auto;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit, auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet.</div>
        <div id="inner_section1" style="width:100%;">
            <div class="inner_small_section">
                <div style="margin:auto;"><img src="images/home_webdeveloper_services2.png" alt=""></div>
                <div style="width:auto">Praesent ut quam quis quam venenatis</div>
            </div>
            <div class="inner_small_section">
                <div style="margin:auto;"><img src="images/home_webdeveloper_services3.png" alt=""></div>
                <div style="width:auto">Nam lacinia suscipit accumsan</div>
            </div>
            <div class="inner_small_section">
                <div style="margin:auto;"><img src="images/home_webdeveloper_services4.png" alt=""></div>
                <div style="width:auto">Donec sodales, neque vitae rutrum convallis</div>
            </div>
            <div class="inner_small_section">
                <div style="margin:auto;"><img src="images/home_webdeveloper_services5.png" alt=""></div>
                <div style="width:auto">Praesent ut quam quis quam venenatis</div>
            </div>
        </div>
    </div>

    <!-- Section3 -->

    <div id="section3s" style="display:block;">
        <div style="width:219px;margin:auto;"><img src="images/home_webdeveloper_services6.png" alt=""></div>
        <div style="font-size:35px;line-height:45px;font-weight:600;font-family:Arial, Helvetica, sans-serif;color:#1b1b4f;text-align:center;margin-bottom:50px;">
            Technologies
        </div>
        <div id="inner_section1s">
            <div id="inner_small_section1s"><img src="images/home_webdeveloper_pic11.png" alt="" style="width:100%;"></div>
            <div id="inner_small_section2s">
                <div>
                    <p style="font-size: 13px;line-height:25px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;font-style:normal;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <p style="font-size: 16px;line-height:26px;font-family: 'Montserrat', sans-serif;font-weight:300;color:#78788c;margin-top:10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit, auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet</p>
                    <div style="margin-top: 15px;padding: 10px;background: #5774bd;;width: 106px;"><a href="#" style="text-decoration:none;color:white;">Read More</a></div>
                </div>
                <div >
                    <p style="font-size: 16px;line-height:26px;font-family: 'Montserrat', sans-serif;font-weight:300;color:#78788c;">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    <p style="font-size: 16px;line-height:26px;font-family: 'Montserrat', sans-serif;font-weight:300;color:#78788c;margin-top:10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit, auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php include "footer.php"; ?>