<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body background="img/background.jpg">
  
  <?php
  include 'navbar.php';
  ?>
  <br>
  <br>
  <br>
  
      <div >
      <!-- Introduction section -->
            <div >
              <div class="col-sm-12 col-md">
                <div class="text-center">
                  <div style="color:#fff;">
                  <br>
                  <h3 style=" color:#fff">Welcome to</h3>
                  <h1 style=" color:#fff">SPARK_FOUNDATION BANK</h1>
                  
                  </div>
                  
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" height="700px" width="100%">
              </div>
            </div>
            <h1 style="color:#fff;background: #000;">Action Center</h1>
            <div class="about__container bd-grid">
        <div class="about__img">
            <img src="img/bank.png" alt="" style="width: 550px;height: 350px; border-radius: 14%;margin-left: 100px;display: inline-block;vertical-align: middle;float: left;">
        </div>
        <div>
        <h2 class="about__subtitle" style="margin-left: 700px;margin-top: 50px;font-weight: bolder; color:white">About</h2><br>
            <p class="about__text" style="margin-left: 700px; color:#fff">We provide loans, accept deposits and many more!<br> WE provide transparency and crediblty to our customers</p> 
        </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Ankita Singh</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>