<?php include "navbar.php"; ?>
<?php include_once "connection.php"; ?>
<?php
if (isset($_POST['send_message'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];
    $query = "INSERT INTO `contact`(`full_name`, `phone_number`, `email`, `message`) VALUES ('$full_name','$phone_number','$email','$message')";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&family=Lato&family=Montserrat:wght@100,200,300,400,500,600,700,800,900&family=Nanum+Gothic:wght@400;800&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Contact Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: white;
        }

        #section1 {
            width: 100vw;
            height: 42vw;
            background-image: url('images/home_webdeveloper_subheaderbg2.jpg');
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #section2 {
            padding: 100px 50px;
        }

        #fieldset .row {
            padding: 5px;
            display: flex;
        }

        .row input,
        .row textarea {
            width: 300px;
            height: 36px;
            margin: 0px 15px;
            padding: 10px;
            border-radius: 2px;
            border: 1px solid grey;
        }

        .row label {
            display: block;
            margin: 5px 15px;
            font-weight: bolder;
        }

        button {
            cursor: pointer;
            border: 3px solid linear-gradient(to bottom right, #73a0c1, #8656a5);
            color: grey;
        }

        button:hover {
            cursor: pointer;
            background: linear-gradient(to bottom right, #73a0c1, #8656a5);
            color: white;
        }
        #section2 #inner_section1{
                display: flex;
            }
            #section2 #inner_section2{
                display: flex;
            }
            #section2 #inner_section2 .inner_small_section{
                width: 33%;
                padding: 25px;
            }
            #section2 #inner_section1 #inner_small_section2{
                padding-left: 50px;
                width: 50%;
            }
        @media(max-width:800px){
            #section2 #inner_section1{
                display: block;
            }
            #section2 #inner_section1 #inner_small_section1,#section2 #inner_section1 #inner_small_section2{

                width:100%;
                margin:auto;
            }
            #section2 #inner_section1 #inner_small_section2 img{
                width: 100%;
                margin-top: 50px;
            }
            #section2 #inner_section2{
                display:block;
                width: 100%;
                margin: auto;
            }
            #section2 #inner_section2 .inner_small_section{
                width: 100%;
                margin: auto;
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<!-- Section1 -->

    <div id="section1">
        <p style="font-size: 65px;line-height:65px;font-family: 'Montserrat', sans-serif;font-weight:700;color:#ffffff;margin-top:80px;">Contact</p>
    </div>

<!-- Section2 -->

    <div id="section2">
        <p style="font-size: 35px;line-height:45px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;width:300px;">Any questions?</p>
        <p style="font-size: 35px;line-height:45px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;width:350px;margin-bottom:50px;">
            Send us a message</p>
        <div id="inner_section1">
            <div id="inner_small_section1" >
                <form action="contact.php" method="post" style="max-width: 370px;margin:auto;box-shadow: 1px 1px 10px #cccccc, -1px -1px 10px #cccccc;border-radius: 2px;padding:20px;">
                    <div class="row" style="max-width:500px;">
                        <div class="col"><label for="">Full Name</label><input type="text" placeholder="Enter Your Fullname" style="max-width:500px;" name="full_name"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="">Phone Number</label><input type="text" placeholder="Enter Your Phone Number" name="phone_number"></div>
                    </div>
                    <div class="row" style="max-width:500px;">
                        <div class="col"><label for="">Email</label><input type="email" placeholder="Enter Your Email" style="max-width:500px;" name="email"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="">Message</label><textarea placeholder="Enter Your Message" name="message"></textarea></div>
                    </div>
                    <input type="submit" name="send_message" value="Send Message" style="background:#161765;color:white;display:block;padding:10px;border:none;border-radius: 2px;font-size:15px;margin:20px auto;">
                </form>
            </div>
            <div id="inner_small_section2">
                <div><img src="images/home_webdeveloper_contact1.png" alt="" style="width:100%;"></div>
                <p style="font-size: 19px;line-height:29px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;margin-top:30px;">Maecenas eleifend erat at justo</p>
                <img src="images/home_webdeveloper_pic5.png" alt="" style="margin:10px 0px;width:90px;">
                <p style="font-size: 16px;line-height:26px;font-family: 'Montserrat', sans-serif;font-weight:300;color:#78788c;">Fusce ut velit laoreet, tempus arcu eu, molestie tortor. Nam vel justo cursus, faucibus lorem eget, egestas eros. Maecenas eleifend erat at justo fringilla imperdiet id ac magna. Suspendisse vel facilisis.

                </p>
                <div>
                    <div style="font-size: 13px;line-height:25px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;margin-top:30px;">noreply@envato.com &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;+61 (0) 3 8376 6284</div>

                </div>
            </div>
        </div>
        <div id="inner_section2" style="padding-top:100px;">
            <div class="inner_small_section">
                <p style="font-size: 19px;line-height:29px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;">Address</p>
                <img src="images/home_webdeveloper_pic5.png" alt="">
                <p style="font-size: 16px;line-height:26px;font-family: 'Montserrat', sans-serif;font-weight:300;color:#78788c;">Level 13, 2 Elizabeth St,
                    Melbourne, Victoria 3000,
                    Australia</p>
            </div>
            <div class="inner_small_section" style="border-left:1px solid #4dc8ca;border-right:1px solid #4dc8ca;">
                <p style="font-size: 19px;line-height:29px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;">Phone / Fax</p>
                <img src="images/home_webdeveloper_pic5.png" alt="">
                <p style="font-size: 16px;line-height:26px;font-family: 'Montserrat', sans-serif;font-weight:300;color:#78788c;">+61 (0) 3 8376 6284
                    +61 (0) 3 8376 6284</p>
            </div>
            <div class="inner_small_section">
                <p style="font-size: 19px;line-height:29px;font-family: 'Montserrat', sans-serif;font-weight:600;color:#1b1b4f;">Emails</p>
                <img src="images/home_webdeveloper_pic5.png" alt="">
                <p style="font-size: 16px;line-height:26px;font-family: 'Montserrat', sans-serif;font-weight:300;color:#78788c;">noreply@envato.com
                    noreply2@envato.com</p>
            </div>
        </div>
    </div>

<!-- Section2 -->

</body>

</html>
<?php include "footer.php"; ?>