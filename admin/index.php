<?php
include "../connection.php";
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}
?>
<?php
if (isset($_POST['delete'])) {
  $client_id = $_POST['client_id'];
  $query = "DELETE FROM `users` WHERE client_id=$client_id";
  mysqli_query($conn, $query);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    #container{
      background: #acc0d1;
    }
    #inner_container table th {
      font-weight: 600;
      font-size: 18px;
      padding: 5px 10px;
      border: 2px solid white;
      background: #e6e6e6;
      border-radius: 2px;
    }

    #inner_container table {
      box-shadow: 1px 1px 5px;
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
      <a class="navbar-brand" href="../index.php"><svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
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
    <div id="logout" style="position: fixed;right:40px;top:10px;z-index:2;display:flex;">
      <svg id="logoutsvg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" style="display:block;margin:auto;color:white;cursor:pointer;">
        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
      </svg>
      <div id="logoutbtn" style="cursor:pointer;">
        <a href="logout.php" style="text-decoration:none;"><button style="padding:5px;border-radius:2px;border:none;background:#212529;color:white;cursor:pointer;margin-left:10px;">Logout</button></a>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <p class="navbar-brand" style="margin-left: 25px;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
        </svg></p>
      <p id="userlist" style="font-size:21px;color:black;">User List</p>
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
    <div style="display: flex;justify-content:center;align-items:center;position:absolute;right:30px;">
      <p style="font-size:22px;font-weight:500;">Welcome!&nbsp;&nbsp;
      <p style="font-size:22px;"><?php echo $_SESSION['username']; ?></p>
      </p>
      <p></p>
    </div>
  </nav>

  <div id="container">
    <div style="width:100%;height:50px;">

    </div>
    <div id="inner_container" style="background:#cccccc;margin:10px;padding:2px;">
      <div style="background: white;">
        <center>
          <table>

            <thead>
              <tr>
                <th>SL</th>
                <th>Client Id</th>
                <th>Username</th>
                <th>Status</th>
                <th>View/Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $sql = "SELECT * FROM users";
              $result = mysqli_query($conn, $sql);
              // Associative array
              while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['client_id']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td>
                    <form action="../view_edit_user_info.php" method="post"><input type="hidden" name="client_id" value="<?php echo $row['client_id']; ?>"><input type="submit" value="View/Edit" class="btn btn-info" name="view"></form>
                  </td>
                  <td>
                    <form action="users1.php" method="post"><input type="hidden" name="client_id" value="<?php echo $row['client_id']; ?>"><input type="submit" value="Delete" class="btn btn-danger" name="delete"></form>
                  </td>
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
</body>

</html>