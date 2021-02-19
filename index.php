<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/icon.png">
    <script src="index.js"></script>
</head>
<body  style="background-color: #fff;" onload="loader()">
    <div class="marquee">
      <marquee> Now money transfer becomes easier and faster. Exciting Welcome Benefits worth Rs. 2400 with FLIPKART Keepsafe Credit Card.</marquee> <br><br><br>
    </div>
    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:
#d7e7f9; opacity:1;"> 

            <img  height="90"src="./images/banklogo.jpg">
            &nbsp            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:black;font-family: 'Times New Roman';font-size:2em">
                &nbsp;KeepSafe Banking System
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:20px; color:pink; "> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewcustomers.php" style="color:black;font-weight:1em;">
                            <div style="padding-left:100px;" >
                            </div>
                            View Customers
                        </a> 
                    </li> 
                </ul> 
            </div>
        </nav> 
    
     <div>
        <div class="row" style="margin:0px; padding:0px;">
            <div class="col-sm font-weight-bold typing_effect" style="padding-left:15px;color:black;font-size:2.2em;text-align:center;justify-content: center;">
             <p class="zoomIn animated" style="margin:10% auto; font-size:40px"> <em>The Better Way To Bank !</em></p>
             <p class="zoomIn animated" style="color:#103d72; margin:1% auto;font-size:40px;"> We Ensure:</p>
               <img  height="50" src="./images/arrow1.png" alt="" style="display:inline;">&nbsp;
                    <div style="padding-top:2%;display:inline;">
                    <p class="zoomIn animated" style="color:#103d72;font-size:20px;display:inline">Speed and Efficiency</p><br> 
                     <img  height="50" src="./images/arrow1.png" alt="" style="display:inline;">&nbsp;
                     <p class="zoomIn animated" style="color:#103d72;font-size:20px;display:inline">Security</span><br>
                     <img  height="50" src="./images/arrow1.png" alt="" style="display:inline;">&nbsp;
                     <p class="zoomIn animated" style="color:#103d72;font-size:20px;display:inline">24/7 Hour Service</span><br>
                     
                    </div><br><br>
                   
            </div>
            <div class="col-sm">
                <img id="square" class="slideInRight animated " style="margin:10% auto;" height="330"src="./images/transfer.png" alt="" style="align-self: flex-end;">
            </div>
        </div>
       
    </div>
</div>
</div>



<script>
setTimeout(function(){$('#loading').hide();}, 500); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>