<?php session_start();
include('backend/cdb.php');

$user_id = $_SESSION['user_id'];
$m_name = $_SESSION['m_name'];
if ($user_id == '') {
  Header("Location: ../logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="sidebar.js"></script>
  <style>
    body {
      margin: 0;
      background-color: #c0ebea;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 15%;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      border: 1px solid #555 overflow auto;
    }

    li {
      text-align: center;
      border-bottom: 1px solid #555;
    }

    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    li a.active {
      background-color: #04AA6D;
      color: white;
    }

    li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    li:last-child {
      border-bottom: 1px solid #555;
    }
  </style>
</head>

<body>

</body>

</html>