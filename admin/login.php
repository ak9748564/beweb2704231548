
<?php include "../navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&family=Lato&family=Nanum+Gothic:wght@400;800&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Login / Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Source Sans Pro', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #73a0c1, #8656a5);
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            padding: 15px;
            background: white;
            border-radius: 7px;
            box-shadow: 1px 1px 10px #cccccc, -1px -1px 10px #cccccc;
            margin: 200px auto;
        }

        .container h2 {
            margin-left: 20px;
        }

        #fieldset .row {
            padding: 5px 0px;
            display: flex;
        }

        #fieldset .row input {
            width: 300px;
            height: 36px;
            margin: 0px 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid grey;
        }

        #fieldset .row label {
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
        @media(max-width:800px){
            #fieldset .row{
                display: block;
                margin: auto;
                width: 300px;
            }
            #fieldset{
               padding: 0px;
            }
            #fieldset .row input,#fieldset .row label {
          margin: 5px 0;
        }

        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <form id="registration_form" style="display:none;" method="post" action="register_admin.php">
            <h2>Registration</h2>
            <div id="fieldset">
                <div class="row">
                    <div class="col"><label>Full Name</label><input type="text" placeholder="Enter Your Name" name="name"></div>
                    <div class="col"><label>Username</label><input type="text" placeholder="Enter Your Username" name="username"></div>
                </div>
                <div class="row">
                    <div class="col"><label>Email</label><input type="email" placeholder="Enter Your Email" name="email"></div>
                    <div class="col"><label>Phone Number</label><input type="number" placeholder="Enter Your Phone Number" name="phonenumber"></div>
                </div>
                <div class="row">
                    <div class="col"><label>Password</label><input type="password" placeholder="Enter Your Password" name="password" id="password"></div>
                    <div class="col"><label>Confirm Password</label><input type="password" placeholder="Confirm Password" name="confirm_password" id="confirmpassword"></div>
                </div>
                <div class="row" style="display: flex;flex-wrap:wrap;margin-bottom:30px;align-items:center;"><label style="display:block;max-width:300px;margin-right: 10px;">Country Code</label><input type="text" name="countrycode" style="display:block;max-width:179px;"> </div>
                <input type="radio" name="gender" id="M" value="Male" style="margin:5px;"><label for="M">Male</label>
                <input type="radio" name="gender" id="F" value="Female" style="margin:5px;"><label for="F">Female</label>
                <input type="radio" name="gender" id="P" value="Prefer Not to Say" style="margin:5px;"><label for="P">Prefer not to say</label>

                <input type="submit" name="register" id="register" value="Register" style="background:linear-gradient(to bottom right ,#73a0c1 ,#8656a5);color:white;display:block;width:100%;padding:10px;border:none;border-radius: 20px;font-size:18px;margin-top:25px;">
            </div>
        </form> -->
        <form method="post" action="../login_admin.php" id="login_form" style="max-width:350px;margin:auto;">
            <h2>User Login</h2>
            <div id="fieldset">
                <div class="row" style="max-width:500px;">
                    <div class="col"><label for="">Username</label><input type="text" placeholder="Enter Your Username" style="max-width:500px;" name="username"></div>
                </div>
                <div class="row">
                    <div class="col"><label for="">Password</label><input type="password" placeholder="Enter Your Password" name="password"></div>
                </div>

                <input type="submit" name="login" value="Login" style="background:linear-gradient(to bottom right ,#73a0c1 ,#8656a5);color:white;display:block;width:100%;padding:10px;border:none;border-radius: 20px;font-size:18px;margin-top:20px;">

            </div>
        </form>
        <!-- <center><button id="not_reg" style="border: 2px solid linear-gradient(to bottom right ,#73a0c1 ,#8656a5);display:block;width:100%;padding:10px;border:none;border-radius: 20px;font-size:18px;margin-top:20px;max-width:300px;">Not Registered? Create an account</button>
        </center> -->
    </div>
    <script>
        var not_reg = document.getElementById("not_reg");
        var login_form = document.getElementById("login_form");
        var registration_form = document.getElementById("registration_form");
        var register = document.getElementById("register");
        var password = document.getElementById("password");
        var confirmpassword = document.getElementById("confirmpassword");

        not_reg.onclick = function() {
            registration_form.style.display = "block";
            login_form.style.display = "none";
            not_reg.style.display = "none";
        };
    </script>
</body>

</html>



