<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #000;
            min-height: 100vh;
            /* overflow: hidden; */
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.6s;
            padding: 20px 100px;
            z-index: 1;
        }

        header.sticky {
            padding: 5px 100px;
            background: #161765;
        }

        header.sticky .logo img {
            max-height: 35px;
            line-height: 60px;
        }

        header .logo {
            position: relative;
            font-weight: 700;
            text-decoration: none;
            font-size: 2em;
            text-transform: uppercase;
            /* letter-spacing: 2px; */
            transition: 0.6s;
        }

        header .logo img {
            max-height: 49px;
            margin-top: 10px;
        }

        header ul {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header ul li {
            position: relative;
            list-style: none;
        }

        header ul li a {
            position: relative;
            margin: 0 15px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            /* line-height: 50px; */
            font-weight: 600;
            color: #fff;
            /* letter-spacing: 2px; */
            font-weight: 500;
            transition: 0.6s;
        }

        #menu_icon {
            display: none;
        }

        #menu {
            position: fixed;
        }

        @media(max-width:900px) {

            /* body{
        display:flex;
    } */
            #container {
                flex-shrink: 1;
            }

            #menu_icon {
                display: block;
            }

            #menu_icon svg {
                color: white;
            }

            #menu ul li,
            #menu ul {
                display: block;
            }

            #menu ul li {
                margin: 0 15px;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                line-height: 80px;
                font-weight: 600;
                color: #fff;
                /* letter-spacing: 2px; */
                font-weight: 500;
                transition: 0.6s;
            }

            #menu ul li a {
                margin: 0 15px;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                line-height: 50px;
                font-weight: 600;
                color: #fff;
                /* letter-spacing: 2px; */
                font-weight: 500;
                transition: 0.6s;
            }

            header ul {
                display: none;
            }
        }
    </style>
</head>

<body>
    <ul id="menu" style="display:none;background: #161765;width: 200px;right: 0px;padding: 25px;top: 100px;text-align: center;">
        <li style="list-style:none;"><a href="../index.php" style="color:white;text-decoration:none;line-height:40px;">Home</a></li>
        <li style="list-style:none;"><a href="../services.php" style="color:white;text-decoration:none;line-height:40px;">Services</a></li>
        <li style="list-style:none;"><a href="#" style="color:white;text-decoration:none;line-height:40px;">How We Work</a></li>
        <li style="list-style:none;"><a href="#" style="color:white;text-decoration:none;line-height:40px;">Case Studies</a></li>
        <li style="list-style:none;"><a href="contact.php" style="color:white;text-decoration:none;line-height:40px;">Contact</a></li>
        <li style="list-style:none;"><a href="../login_register.php" style="color:white;text-decoration:none;line-height:40px;">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
            </a></li>


        <li style="list-style: none;"><a href="../logout.php" style="text-decoration:none;"><svg id="logoutsvg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" style="display:block;margin:auto;color:white;cursor:pointer;">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg></a>


            </div>
            </div>
        </li>
    </ul>

    <header>
        <div class="logo">
            <img src="images/retina-webdeveloper.png" alt="webdeveloper">
        </div>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../services.php">Services</a></li>
            <li><a href="#">How We Work</a></li>
            <li><a href="#">Case Studies</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li>
                <div>
                <a href="../login_register.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="position:relative;top: 10px;">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                </a>
                </div>
            </li>
            <li>
                <div id="logout" style="z-index:2;">
                    <a href="../logout.php" style="text-decoration:none;">
                        <svg id="logoutsvg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" style="display:block;margin:auto;color:white;cursor:pointer;">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </a>
                </div>
            </li>
        </ul>
        <div id="menu_icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg></div>

        </div>
    </header>
    <script>
        var logout = document.getElementById("logout");
        logout.style.top = "-8px";
        var menu_icon = document.getElementById("menu_icon");
        var menu = document.getElementById("menu");
        var container = document.getElementById("container");
        menu_icon.onclick = function() {
            if (menu.style.display == "none") {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }

            menu.style.right = "0px";
            menu.style.top = "70px";
            menu.style.textAlign = "center";
        };
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        });
    </script>

</body>

</html>