<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Z & A HOTEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: white; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: rgb(16, 16, 73); /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: goldenrod; /* Black Gray */
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>



<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <img src="{{asset('admin/logoo.png')}}"  style="display:inline" alt="Bird" height="300" >
</div>
<style>
.button {
  background-color: Gainsboro; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {border-radius: 12px;}
</style>
<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
<button class="button button4"><a href="/login" color="white">operator</button>
<button class="button button4"><a href="/login" color="white">pegawai</button>
<button class="button button4"><a href="/customer" color="white">Customer</button>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">

</footer>

</body>
</html>
