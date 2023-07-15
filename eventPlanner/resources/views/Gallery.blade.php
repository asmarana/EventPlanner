<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
    
        <!------------------------------Navigation ------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand logo-text page-scroll" href="#">EventX</a>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="Home.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="Events.html">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll active" href="Gallery.html">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="Contact.html">CONTACT<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="About.html">ABOUT</a>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm page-scroll" href="login.blade.php">ACCOUNT</a>
                    </span>
                </div>
            </div> 
        </nav>
        
<!-- Header -->
<div class="header">
    <h1><br><br>Gallery</h1>
    <p>Some of our best events pictures</p>
  </div>
  
  <!-- Photo Grid -->
  <div class="row"> 
    <div class="column">
      <img src="images/img10.jpg" style="width:100%">
      <img src="images/img8.jpg" style="width:100%">
      <img src="images/bbimg5.png" style="width:100%">
      <img src="images/bimg1.jpg" style="width:100%">
      <img src="images/cover3.jpg" style="width:100%">
      <img src="images/img4.jpg" style="width:100%">
    </div>
    <div class="column">
      <img src="images/img6.jpg" style="width:100%">
      <img src="images/bbimg5.png" style="width:100%">
      <img src="images/img5.jpg" style="width:100%">
      <img src="images/img11.jpg" style="width:100%">
      <img src="images/img9.jpg" style="width:100%">
      <img src="images/img3.jpg" style="width:100%">
    </div>  
    <div class="column">
      <img src="images/img7.jpg" style="width:100%">
      <img src="images/bimg6.jpg" style="width:100%">
      <img src="images/img1.jpg" style="width:100%">
      <img src="images/cover4.jpg" style="width:100%">
      <img src="images/cover1.jpg" style="width:100%">
      <img src="images/img4.jpg" style="width:100%">
      <img src="images/img11.jpg" style="width:100%">
    </div>
    <div class="column">
      <img src="images/img2.jpg" style="width:100%">
      <img src="images/img4.jpg" style="width:100%">
      <img src="images/bbimg6.jpg" style="width:100%">
      <img src="images/bimg5.jpg" style="width:100%">
      <img src="images/blogimg2.jpeg" style="width:100%">
      <img src="images/bimg2.jpg" style="width:100%">
      <img src="images/bbimg1.jpg" style="width:100%">
    </div>
  </div>
</body>
<footer>
    <div class="footercontainer">
      <div class="side">
      <ul>
      <li id="mainheading">How can we Help?</li>
      <li><a href="#DP Cares">DP Cares</a></li>
      <li><a href="#Contact us">Contact us</a></li>
      <li><a href="#Store Locations">Store Locations</a></li>
      <li><a href="#Fashion Shows">Fashion Shows</a></li>
      </ul>
      </div>
      <div class="side">
      <ul>
      <li id="mainheading">Customer Service</li>
      <li><a href="#Ordering & Tracking">Ordering & Tracking</a></li>
      <li><a href="#Terms & Conditions">Terms & Conditions</a></li>
      <li><a href="#Privacy Policy">Privacy Policy</a></li>
      <li><a href="#Shipping Policy">Shipping Policy</a></li>
      </ul>
      </div>
      <div class="side">
      <ul>
      <li id="mainheading">Follow us</li>
      <li><a href="#Facebook"><span class="fa fa-facebook"></span> Facebook</a></li>
      <li><a href="#Twitter"><span class="fa fa-twitter"></span> Twittwer</a></li>
      <li><a href="#Instagram"><span class="fa fa-instagram"></span> Instagram</a></li>
      <li><a href="#Instagram"><span class="fa fa-snapchat-ghost"></span> Snapchat</a></li>
      </ul>
      </div>
      <div class="side">
      <center>
      <ul>
      <li id="mainheading">NewsLetter</li>
      <li><input type="email" id="email" placeholder="Enter Your Email Here..."required></li>
      <li><input class="submitnewsletter" type="submit" id="submit" value="SUBSCRIBE"></li>
      <br><br>
      </ul>
      </center>
      </div>
      </div>
    </footer>
    <style>
        * {
          box-sizing: border-box;
        }
        
        body {
          margin: 0;
          font-family: Arial;
        }
        
        .header {
          text-align: center;
          padding: 32px;
        }
        
        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          padding: 0 4px;
        }
        
        /* Create four equal columns that sits next to each other */
        .column {
          -ms-flex: 25%; /* IE10 */
          flex: 25%;
          max-width: 25%;
          padding: 0 4px;
        }
        
        .column img {
          margin-top: 8px;
          vertical-align: middle;
          width: 100%;
        }
        
        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
          .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
          }
        }
        
        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
          }
        }
        </style>
</html>