<?php
session_start();
include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>User Profile</title>
    <style>
        body {
            background: #f9f9fa;
            text-align: left;
            font-size: 20px;
            color: #272b2f;
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #container {
            
            display: flex;
            max-width: 850px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 1px 1px 20px #cccccc,-1px -1px 20px #cccccc;
        }

        #left {
            width: 300px;
            max-height: 485px;
            background: linear-gradient(to right, #ee5d6e, #f28c63);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #left p {
            text-align: center;
            font-size: 30px;
            color: white;
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #left #email_phonenumber {
            display: flex;
        }

        #right {
            padding: 40px;
            flex-grow: 1;
            border-radius: 10px;
            border: 1px solid #e6e6e6;
            background: white;
        }

        #right input {
            padding: 5px;
            font-family: inherit;
            font-size: 20px;
            color: #acacac;
        }
        .ROW{
            display:flex;justify-content:space-between;margin-bottom:8px;
        }
        @media(max-width:950px) {
            #container{
                display: block;
                max-width:670px;
            }
            #container #left{
                width:670px;
                height: 300px;
            }
        }
        @media(max-width:700px) {
            #container{
                display: block;
                max-width:400px;
            }
            #container #left{
                width: 100%;
                height: 300px;
            }
            .ROW{
                display: block;
            }
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg></a>
            <p id="dashboard" style="margin:0;font-size:24px;color:white;">Dashboard</p>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
                <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
            </div>
        </div>
    </nav>
    <div id="container">

    

        <div id="left">
            <div><img src="images/happy-people-avatars_52683-34515 (1).png">
                <p><?php echo $_SESSION['username']; ?></p>
            </div>
        </div>
        <div id="right">
            <?php
            if (isset($_POST['view'])) {
                $client_id = $_POST['client_id'];
            }
            $sql = "SELECT * FROM users WHERE username = '$_SESSION[username]'";

            $result = mysqli_query($conn, $sql);
            // Associative array
            while ($row = $result->fetch_assoc()) { ?>
                <form action="update_user_info.php" method="post">
                    <div class="ROW">
                        <div style="display:flex;"><span>Name:&nbsp;</span>
                            <p style="color:#acacac;margin:0;"><?php echo $row['name']; ?></p>
                        </div>
                        <div style="display:flex;width:290px;" id="w1"><span>Client_id:&nbsp;</span>
                            <p style="margin:0;color:#acacac;"><?php echo $row['client_id']; ?></p>
                        </div>
                    </div>


                    <div class="ROW">
                        <div>
                            <span>Email:&nbsp;</span>
                            <input class="td" name="email" value="<?php echo $row['email']; ?>">
                        </div>
                        <div style="width:321px;" id="w2">
                            <span>Phone Number:&nbsp;</span>
                            <input class="td" name="phonenumber" value="<?php echo $row['phonenumber']; ?>">
                        </div>
                    </div>


                    <div class="ROW">
                        <div><span>Country Code:&nbsp;</span>
                            <p style="color:#acacac;margin:0;"><input class="td" name="countrycode" value="<?php echo $row['countrycode']; ?>"></p>
                        </div>
                        <div style="width:290px;" id="w3"><span>Gender:&nbsp;</span>
                            <p style="margin:0;color:#acacac;"><?php echo $row['gender']; ?></p>
                        </div>
                    </div>


                    <div class="ROW">
                        <div><span>Project Description:&nbsp;</span>
                            <p style="color:#acacac;margin:0;"><input class="td" name="project_desc" value="<?php echo $row['project_desc']; ?>"></p>
                        </div>
                        <div style="width: 290px;" id="w4"><span>Project Cost:&nbsp;</span>
                            <p style="margin:0;color:#acacac;"><input class="td" name="cost" value="<?php echo $row['cost']; ?>"></p>
                        </div>
                    </div>
                    <div>

                    <span>Status:&nbsp;</span>
                        <p style="font-size:20px;color:#acacac;"><?php echo $row['status']; ?></p>
                        <input type="hidden" name="client_id" value="<?php echo $row['client_id']; ?>"><input type="submit" value="Update" class="btn btn-info" name="user_edit" style="color: white;">
                    </div>
        </div>
        </form>
    <?php } ?>
    </div>
    </div>
    <!-- <script>
        var w1 = document.getElementById("w1");
        var w2 = document.getElementById("w2");
        var w3 = document.getElementById("w3");
        var w4 = document.getElementById("w4");
        var input = document.getElementsByTagName("input");

        var container = document.getElementById("container");
        window.addEventListener("resize",function(){if(window.innerWidth < 400){container.style.width = "95%";w1.style.width = "100%";w2.style.width = "100%";w3.style.width = "100%";w4.style.width = "100%";input.style.width = "100%";};});
        
    </script> -->
</body>

</html>