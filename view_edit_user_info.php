<?php
include "connection.php";
session_start();
?>
<?php
if (isset($_POST['delete'])) {
    $client_id = $_POST['client_id'];
    $query = "DELETE FROM users WHERE client_id='$client_id'";
    mysqli_query($conn, $query);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        #inner_container table th {
            font-weight: 400;
            padding: 5px 10px;
            border: 2px solid white;
            background: #e6e6e6;
            border-radius: 2px;
        }

        #inner_container table {
            width: 100%;
        }

        tbody td {
            border: 1px solid #e6e6e6;
            padding: 5px 10px;
        }

        @media(max-width:995px) {
            #dashboard {
                position: absolute;
                left: 50px;
            }

            #userlist {
                position: absolute;
                left: 80px;
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
        <div style="width:100%;height:50px;">

        </div>
        <div id="inner_container" style="margin:10px;padding:2px;">
            <div style="background: white;">
                <center>
                    <table style="max-width: 600px;">
                        <tbody>
                            <?php
                            
                            ?>
                            <?php
                            if (isset($_POST['view'])) {
                                $client_id = $_POST['client_id'];
                            }
                            $sql = "SELECT * FROM users WHERE client_id='$client_id'";
                            
                            $result = mysqli_query($conn, $sql);
                            // Associative array
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <th>Id</th>
                                    <td><?php echo $row['id']; ?></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td><?php echo $row['username']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td><?php echo $row['phonenumber']; ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td><?php echo $row['gender']; ?></td>
                                </tr>
                                <tr>
                                    <th>Country Code</th>
                                    <td><?php echo $row['countrycode']; ?></td>
                                </tr>
                                <form action="update_user_info.php" method="post">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                <tr>
                                    <th>Project Description</th>
                                    <td style="display:flex;justify-content:space-between;">
                                        <input class="td" name="project_desc" value="<?php echo $row['project_desc']; ?>"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Project Cost</th>
                                    <td style="display:flex;justify-content:space-between;">
                                        <input class="td" name="cost" value="<?php echo $row['cost']; ?>"></div>
                                        <!-- <div class="edit">Edit</div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td style="display:flex;justify-content:space-between;">
                                        <input class="td" name="status" value="<?php echo $row['status']; ?>"></div>
                                        <!-- <div class="edit">Edit</div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <th>Client Id</th>
                                    <td><?php echo $row['client_id']; ?></td>
                                </tr>
                                <tr>
                                    <th>Update</th>
                                    <td>
                                        <input type="hidden" name="client_id" value="<?php echo $row['client_id']; ?>"><input type="submit" value="Update" class="btn btn-info" name="update">
                                    </td>
                                </tr>
                                </form>
                                <form action="update_user_info.php" method="post">
                                <tr>
                                    <th>Delete</th>
                                    <td>
                                       <input type="hidden" name="client_id" value="<?php echo $row['client_id']; ?>"><input type="submit" value="Delete" class="btn btn-danger" name="delete">
                                    </td>
                                </tr>
                                </form>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </center>
            </div>
        </div>
        <div style="width:100%;height:50px;">

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        var edit = document.getElementsByClassName("edit");
        var td = document.getElementsByClassName("td");
        var save = document.getElementsByClassName("save");
        var input = document.getElementsByClassName("input");

        edit[0].onclick = function() {
            let pi = td[0].innerText
            td[0].innerHTML = `<input type="text" name="project_desc" class="input">`;
            input[0].value = pi;
            edit[0].style.display = "none";
            save[0].style.display = "block";
        };
        edit[1].onclick = function() {
            let pi = td[1].innerText
            td[1].innerHTML = `<input type="number" name="cost" class="input">`;
            input[1].value = pi;
            edit[1].style.display = "none";
            save[1].style.display = "block";
        };
        edit[2].onclick = function() {
            let pi = td[2].innerText
            td[2].innerHTML = `<input type="text" name="status" class="input">`;
            input[2].value = pi;
            edit[2].style.display = "none";
            save[2].style.display = "block";
        };
        // save[0].onclick = function() {
        //     let ni = input[0].value;
        //     // input[0].innerText = ni;
        //     edit[0].style.display = "none";
        //     save[0].style.display = "block";
        // };
        // save[1].onclick = function() {
        //     let ni = input[1].value;
        //     input[1].innerText = ni;
        //     edit[1].style.display = "none";
        //     save[1].style.display = "block";
        // };
        // save[2].onclick = function() {
        //     let ni = input[2].value;
        //     input[2].innerText = ni;
        //     edit[2].style.display = "none";
        //     save[2].style.display = "block";
        // };
    </script>
</body>

</html>