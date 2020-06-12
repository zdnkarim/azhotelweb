<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Reservation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, "Comic Sans MS";
    color: black;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 60px;
    font: 400 100px/1.8 Tangerine;
    color: black;
  }
  .container {
    padding: 80px 120px;
  }
  
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  
  
  

  
  </style>
</head>
<body id="myPage" class="w3-khaki" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav>
    <div class="w3-bar w3-border w3-light-grey w3-xxlarge">
    <a href="/customer" class="w3-bar-item w3-button">Z & A Hotel</a>
      <a href="/home" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-right"  data-toggle="modal" data-target="#exampleModal">booking</a>
    </div>    
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{asset('admin/surabaya.jpg')}}" alt="New York" width="1200" height="700">
         
      </div>

      <div class="item">
        <img src="{{asset('admin/hotel.jpg')}}" alt="Chicago" width="1200" height="700">
             
      </div>
    
      <div class="item">
        <img src="{{asset('admin/room.jpg')}}" alt="Los Angeles" width="1200" height="700">
   
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div id="band" class="container text-center">
  <h3>Z & A HOTEL</h3>
  <p><em>Surabaya, Indonesia</em></p>
  <div class="text-left">
    <p>Hotel dari ZIDAN and ANDRICO Hotels Group yang memanjakan anda dengan keindahan kota Surabaya dengan fasilitas kamar yang nyaman, lokasi strategis, pelayan yang ramah menjadikan pengalaman terbaru bagi anda untuk bisnis maupun liburan keluarga</p>
    <p><strong>Fasilitas:</strong></p>
    <p>1. Air conditioner</p>
    <p>2. Wi-Fi</p>
    <p>3. Swimming Pool</p>
    <p>4. Fitness center</p>
    <p>5. Resto and bar</p>
    <p>6. Meeting Room</p>
    <p>7. Grand Ballroom</p>
    <p>8. 24 Hours Security system</p>
    <p>and many more, fasilitas ini free dan dapat dimanfaatkan oleh semua pengunjung dengan memesan kamar tipe apapun anda dapat mengakses fasilitas ini.</p>
  <div class="text-center">
    <img src="{{asset('admin/receptionist.jpg')}}"width="500">
  </div>
  
  </div>
  <br>
  <h4>Room Type</h4>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>VIP</strong></p><br>
        <img src="{{asset('admin/budget.jpg')}}" alt="Random Name" width="255">
      <p>Kamar dengan kelas standar memiliki kenyamanan yang tinggi,for 2 people price: 400.000 - 700.000</p>
      
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>VVIP</strong></p><br>
        <img src="{{asset('admin/kamar.jpg')}}" alt="Random Name" width="255">
      <p>Kamar dengan size bed king size dan free breakfast untuk 2 orang,for 2 people price: 700.000 - 900.000</p>
      
      </div>

      <div class="col-sm-4">
      <p class="text-center"><strong>SUITES</strong></p><br>
        <img src="{{asset('admin/room.jpg')}}" alt="Random Name" width="255">
      <p>Kamar yang dilengkapi kulkas dan bathub di dalamnya, mendapatkan free breakfast untuk 2 orang, price 1.000.000 - 1.700.000</p>
      
    </div>

  <div class="row">
    </div>
    
    <div class="col-sm-16">
      <p class="text-center"><strong>PRESIDEN SUITES</strong></p><br>
        <img src="{{asset('admin/hotel.jpg')}}" alt="Random Name" width="255">
      <p>Kamar dengan grade terbaik di kelasnya, mendapatkan fasilitas serba VIP. mempunyai sofa tambahan, dan free VIP breakfast. price 5.000.000</p>
      
    </div>
    </div>

    <button class="w3-button w3-block w3-xxxlarge w3-yellow " style="width=100%" data-toggle="modal" data-target="#exampleModal"></i>Daftarkan sebagai customer</button>

  
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Tambah Data Pengunjung</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/pengunjung/create" method="POST">
      {{csrf_field()}}
      
        <div class="form-group">
            <label for="exampleInputPassword1">ID</label>
            <input name="id_pengunjung" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID Pengunjung">
          </div>
          
      
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Pengunjung</label>
            <input name="nama_pengunjung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pengunjung">
            
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat_pengunjung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Pengunjung">
            
          </div>

          <div class="form-group">
              <label for="exampleFormControlSelect1">Pilih jenis kelamin</label>
              <select name="jk_pengunjung" class="form-control" id="exampleFormControlSelect1">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
               
              </select>
            </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Nomor Telpon</label>
            <input name="telpon_pengunjung" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Telpon">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Nomor KTP</label>
            <input name="ktp_pengunjung" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor KTP">
          </div>

          

          
 
      </div>
      <div class="modal-footer">
        <button type="button" class="w3-button w3-Large w3-red" data-dismiss="modal">Close</button>
        <button type="submit" class="w3-button w3-Large w3-yellow">Submit</button>
  </form>
      </div>
    </div>
  </div>
  </div>

<footer class="w3-dark-grey">

<div id="contact" class="container">
  <h3 class="text-center">For further information :</h3>
<br>

      
      <p><em>Mulyorejo Surabaya, Indonesia</em></p>
      <p>Phone: +62 88888888</p>
      <p>Email: 122356@mail.com</p>
  
 
    </div>
  </div>
  <br>
  
  

  <div class="tab-content">
    
  </div>
</div>
</footer>

<script>

</script>

</body>
</html>
