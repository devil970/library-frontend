<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title><!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>  
<div class="container">
   <div class="content">
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      
   </div></div>

    <!-- nav bar -->
    <div class="navbar">
        <div class="logo">
          <a href="user_page.php"><img src="logo.png" alt="Logo"></a>
        </div>
        <ul class="menu">
            <li><a href="user_page.php">Books</a></li>
            <li><a href="categories.html">Categories</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul> 
        <div class="buttons">
            <a href="logout.php" class="logout-button">Log Out</a>    
        </div>
          </div>

    <!-- slider images -->
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="img/1.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/2.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/3.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/4.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/5.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    
    <!-- item cards -->
      <div class="heading">
        <h1>MOST POPULER</h1>
    </div>


    <div class="section2">
        <div class="container">
          <div class="items">
           <a href="BOOKS/Rich Dad Poor Dad.pdf" target="_blank"><div class="img img1"><img src="BOOKS/rech dad poor dad.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">Rober T. Kiyosaki</div>
          </div>
          <div class="items">
            <a href="BOOKS/Atomic Habits by James Clear.pdf" target="_blank"><div class="img img1"><img src="BOOKS/atomic habits.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">James Clear</div>
          </div>
          <div class="items">
           <a href="BOOKS/Into the Water.pdf" target="_blank"><div class="img img1"><img src="BOOKS/into the water.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">Hawkins, Paula</div>
          </div>
          <div class="items">
           <a href="BOOKS/The 5 Second Rule.pdf" target="_blank"><div class="img img1"><img src="BOOKS/5 second rule.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">Mell Robbins.</div>
          </div>
          <div class="items">
           <a href="BOOKS/Believe Me.pdf" target="_blank"><div class="img img1"><img src="BOOKS/belive me.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">Tahereh Mafi</div>
          </div>
          <div class="items">
            <a href="BOOKS/Our Shellfish Desires.pdf" target="_blank"><div class="img img1"><img src="BOOKS/our shellfish desires.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">K.L.Hiers</div>
          </div>
          <div class="items">
            <a href="BOOKS/Strapped for Cash.pdf" target="_blank"><div class="img img1"><img src="BOOKS/strapped to cash.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">K.L.Hiers</div>
          </div>
          <div class="items">
            <a href="BOOKS/harry potter 1.pdf" target="_blank"><div class="img img1"><img src="BOOKS/harry potter 1.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">J.K.Rowling</div>
          </div>
          <div class="items">
            <a href="BOOKS/The lord of the rings1.pdf" target="_blank"><div class="img img1"><img src="BOOKS/lord of the rings1.png" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">Tolkien.J.R.R.</div>
          </div>
          <div class="items">
            <a href="BOOKS/hamlet.pdf" target="_blank"><div class="img img1"><img src="BOOKS/hemlet.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">William Shakespeare</div>
          </div>
          <div class="items">
            <a href="BOOKS/The Power of Self-Esteem.pdf" target="_blank"><div class="img img1"><img src="BOOKS/the power of self esstim.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Author:-</div>
            <div class="info">Nathanel Branden</div>
          </div>
          <div class="items">
            <a href="BOOKS/I-am-malala-pdf.pdf" target="_blank"><div class="img img1"><img src="BOOKS/i  am malala.jpeg" alt=""></div>
            <div class="name">READ ME</div></a>
            <div class="price">Athor:-</div>
            <div class="info">malala</div>
          </div>
        </div>
      </div>
    </div>

  </section>
    


















































    <footer>
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6">
<h4>ONLINE BOOK LIBRARY</h4>
<p>Address: 123 Main Street, Nagpur, India</p>
<p>Phone: 0123-456-7890</p>
<p>Email: onlinebooks@gmail.com</p>
</div>
<div class="col-md-4 col-sm-6">
<h4>Useful Links</h4>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="categories.html">All Books</a></li>
<li><a href="about.html">About Us</a></li>
</ul>
</div>
<div class="col-md-4 col-sm-6">
<h4>Important Links</h4>
<ul>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p>Copyright &copy; ONLNE BOOK LIBRARY. All rights reserved.</p>
</div>
</div>
</div>
</footer>
<script src="slider.js"></script>

  
</div>
</body>
</html>