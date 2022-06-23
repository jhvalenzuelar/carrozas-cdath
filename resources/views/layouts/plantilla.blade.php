<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" type="image/png" href="favicon.ico"/>
    <title>Homenaje a la Cultura y Folclor PLateño</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <script src="https://kit.fontawesome.com/90afd3ca96.js" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('dist/css/carousel.css') }}" rel="stylesheet">
  </head>
  <body>
    
    @yield('content')


  <!-- FOOTER -->
  <footer class="container">
    <!-- <p>&copy; 2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
    <p>&copy; 2022 CDATH</p>
  </footer>
</main>

 <!-- jQuery -->
 <script src="plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
 <!-- AdminLTE App -->
 <script src="dist/js/adminlte.min.js"></script>

 <!-- Toastr -->
<!-- <script src="plugins/toastr/toastr.min.js"></script> -->

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery.slim.min.js"><\/script>')</script>
 <script src="dist/js/bootstrap.bundle.min.js"></script>



 <script>
   $(document).ready(function() {
     $('.product-image-thumb.thumb1').on('click', function(){
       var $image_element1 = $(this).find('img')
       $('.product-image.thumb1').prop('src', $image_element1.attr('src'))
       $('.product-image-thumb.thumb1.active').removeClass('active')
       $(this).addClass('active')
     });

     $('.product-image-thumb.thumb2').on('click', function(){
       var $image_element2 = $(this).find('img')
       $('.product-image.thumb2').prop('src', $image_element2.attr('src'))
       $('.product-image-thumb.thumb2.active').removeClass('active')
       $(this).addClass('active')
     });

     $('.product-image-thumb.thumb3').on('click', function(){
       var $image_element3 = $(this).find('img')
       $('.product-image.thumb3').prop('src', $image_element3.attr('src'))
       $('.product-image-thumb.thumb3.active').removeClass('active')
       $(this).addClass('active')
     });

     $('.product-image-thumb.thumb4').on('click', function(){
       var $image_element4 = $(this).find('img')
       $('.product-image.thumb4').prop('src', $image_element4.attr('src'))
       $('.product-image-thumb.thumb4.active').removeClass('active')
       $(this).addClass('active')
     });

     $('.product-image-thumb.thumb5').on('click', function(){
       var $image_element5 = $(this).find('img')
       $('.product-image.thumb5').prop('src', $image_element5.attr('src'))
       $('.product-image-thumb.thumb5.active').removeClass('active')
       $(this).addClass('active')
     });

   })
 </script>
      
  </body>
</html>
