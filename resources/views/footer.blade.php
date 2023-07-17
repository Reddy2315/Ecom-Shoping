<!-- Remove the container if you want to extend the Footer to full width. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .footerNav{
            margin:20px 0;
        }
        .footerNav ul{
           display :flex;
           justify-content:center;
        }
        .footerNav ul li{
        list-style-type:none;
        }
        .footerNav ul li a{
           color:black;
           margin:20px;
           text-decoration:none;
           font-size:1.3em;
           
        }
        .footerNav ul li a:hover{
           opacity:1;
        }
    </style>
</head>
<body>
    
<div class="d-flex flex-column min-vh-100 ">
    
  <footer class="text-center text-white mt-auto" style="background-color: #f1f1f1;">

  <!-- Grid container -->
  <div class="container pt-4">
  <div class="footerNav my-1">
    <ul>
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Contact Us</a></li>
    <li><a href="">News</a></li>
    <li><a href="">Our Team</a></li>
    </ul>
    </div>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.facebook.com/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://twitter.com/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.google.com/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.instagram.com/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.linkedin.com/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://github.com/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright ©-->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Copyright &copy; 2023: Designed by <span class="designer">Reddy</span>
    <a class="text-dark" href="https://Ecom-shop.com/">Ecom-shop.com</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
</body>
</html>
<!-- End of .container -->
<!-- <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer> -->