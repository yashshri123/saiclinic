<?php

    $user = "root";
    $host = "localhost";
    $password = "1234";
    $db = "clinic_details";

    $con = mysqli_connect($host, $user, $password, $db);

    // if($con){
    //   echo "Connection sucessfull!";
    // }

    // else{
    //   echo "Connection failed!";
    // }

    if(isset($_POST['btn'])){
      $uname = $_POST['uname'];
      $address = $_POST['user_address'];
      $mbno = $_POST['mobile_no'];
      $email = $_POST['email'];
      $msg = $_POST['msg'];

      $sql = "INSERT INTO clinic_info (uname, user_address, mobile_no, email, msg) VALUES ('$uname', '$address', '$mbno', '$email', '$msg')";

      $res = mysqli_query($con, $sql);

      // if($res){
      //   echo "Data uploaded sucessfully";
      // }
      // else{
      //   echo "Data not uploaded !";
      // }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <style>
        body{
          font-size: 16px;
          font-family: Georgia, serif;
          background-attachment:scroll;
        }
        .heading{
        margin-top: 100px;
        margin-left: 49px;
        padding: 10px;
        line-height: 0.6;
        font-size: 40px;
        color: rgb(58, 59, 59);
        
        }
        .heading h3{
        color: rgb(50, 163, 163);
        }
          ul{
              list-style-type: none;
  
          }
          ul li{
              display: inline-flex;
          }
          ul li a{
              padding: 20px;
              text-decoration: none;
              color: red;
              font-weight:200;
              font-size: large;
              font-family: Georgia, serif;
          }
          #nav1{
              margin-left:80%;
          }
          #nav1 a{
              padding: 5px;
          }
          address{
            margin-left: 100px;
          }
          div#map{
            height: 400px;
            width: 100%;
            margin-left: 100px;
            margin-top: 20px;
          }
          section#msgbox{
            margin-left:350px;
            text-align: center;
            margin-top: 100px;
            font-size: large;
            padding: 10px;
            color:black;
            width: 50%;
          }
        
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <section id="nav1">
        <a href="tel:9921912532">
        <i class="fa">&#xf095;</i>9921912532</a>
        <a href="mailto:shrisaiclinic12@gmail.com">
        <i class="fa">&#xf003;</i>shrisaiclinic12@gmail.com</a>
    </section>
    <nav>
        <ul>
            <img src="logo_2.jpeg" alt="logo" style="width: 300px; height:100px">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About US</a></li>
            <li><a href="facilities.html">Facilities</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
    <section>
        <img src="https://www.nidaanhospital.in/images/contact-us.jpg" alt="page" width="1520" height="300">
      </section>
      <section class="heading">
        <h1>SHRI SAI CLINIC</h1>
        <h3 >Day Care Center</h3>
      </section>

      <div style="background-color:#777;">
      <form action="" method="post">
      <section id="msgbox">
        <br><br><br>
        <h2>SEND US A MESSAGE</h2> <br><br>
   
              Name &nbsp &nbsp &nbsp &nbsp<input type="text" name="uname"><br><br>
              Address &nbsp &nbsp &nbsp<input type="text" name="user_address"><br><br>
              Mobile No. &nbsp <input type="text" name="mobile_no"><br><br>
              Email &nbsp &nbsp &nbsp &nbsp<input type="text" name="email"><br><br>
              Message &nbsp<textarea name="msg"></textarea><br><br>
              <input type="submit" value="submit" style="margin-left:90px;" name="btn">
              <br><br><br><br><br><br>
      </section>
      </form>
        </div>
    
      
      <section>
        <h2 style="margin-top: 100px; margin-left:55px; font-size: 40px;">Contact Us</h2>
        <hr>
      </section>
      <section>
        <address>
            At.Post.Sonake;Tal.Koregaon;Dist.Satara. <br>
            Contact No.:<a href="tel:9921912532">
                <i class="fa">&#xf095;</i>9921912532</a><br>
            Email:<a href="mailto:shrisaiclinic12@gmail.com">
                <i class="fa">&#xf003;</i>shrisaiclinic12@gmail.com</a>
        </address>

      <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1897.992479677131!2d74.07411985790908!3d17.932855448842314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc24fcc9bf828dd%3A0x26294c1ae885b29c!2sShree%20Sai%20Clinic!5e0!3m2!1sen!2sin!4v1656513859717!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br><br><br><br>
    <section style="background-color:black ; color: red; padding-left: 200px;">
  <br><br><br>
  <address>
      At.Post.Sonake;Tal.Koregaon;Dist.Satara. <br>
      Contact No.:<a href="tel:9921912532">
          <i class="fa">&#xf095;</i>9921912532</a><br>
      Email:<a href="mailto:shrisaiclinic12@gmail.com">
          <i class="fa">&#xf003;</i>shrisaiclinic12@gmail.com</a>
      </address>
    <br><br><br><br><br>
</section>
    
    </section>

</body>
</html>