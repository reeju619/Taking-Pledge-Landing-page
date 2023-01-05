<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">


  <!-- Object Fit polyfill -->
  <script src="https://unpkg.com/object-fit-images/dist/ofi.min.js"></script>

  <title>Home Page</title>

  <style>
    .error-msg {
      color: yellow;
      font-size: 14px;
    }
  </style>

</head>

<body>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <picture>
          <source type="image/webp" srcset="images/mobile-image-3.webp" media="(max-width: 768px)">
          <source type="image/jpg" srcset="images/mobile-image.jpg" media="(max-width: 768px)">
          <source type="image/webp" srcset="images/parallex-3.webp">
          <source type="image/jpg" srcset="images/parallex-3.jpg">
          <img src="images/parallex-3.jpg" alt="#" class="d-block w-100">
        </picture>
        <div class="parallex-content banner_block">
          <div class="banner_content" id="form_top">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="banner_form form_style">
                    <form action="lead.php" method="post" onsubmit="return validateForm()">
                      <div class="form-group position-relative">
                        <span><img src="images/name-icon.png" alt="name"></span>
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                        <span class="error-msg" id="nameErr"></span>
                      </div>
                    
                      <div class="form-group position-relative">
                        <span><img src="images/phone-icon.png" alt="name"></span>
                        <input type="text" class="form-control" placeholder="Phone" id="number" name="number">
                        <span class="error-msg" id="numberErr"></span>
                      </div>
                      
                      <div class="form-group position-relative">
                        <span><img src="images/email-icon.png" alt="name"></span>
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        <span class="error-msg" id="emailErr"></span>
                      </div>

                      <div class="form-group position-relative">
			                     <input type="radio" id="genderM" name="gender" value="male" />
			                     <label for="genderM">Male</label>
			                   <input type="radio" id="genderF" name="gender" value="female" />
			                    <label for="genderF">Female</label>
                      </div>

                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" name="box" id="box" value="Yes" checked>
                        <label class="custom-control-label text-block " for="box">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                      </div>
                      <div class="form-group position-relative mt-4">

                        <input type="submit" class="form-control submit_btn" value="Connect With Us">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>






  <div class="why_save gap-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text_content text-center">
            <h3 class="header_text position-relative mb-5">
            Lorem ipsum <br> dolor sit amet,
            </h3>

            <p>Integer sit amet nulla sed ex tincidunt vulputate. Pellentesque lacinia vitae elit nec iaculis. Suspendisse potenti. Aliquam posuere, dui in blandit posuere, ante ipsum tempus sem, quis finibus est lectus et sem.</p>
            <p>Nullam tellus tellus, blandit id ante ac, suscipit varius nisi. Nam rhoncus ante non ipsum imperdiet, ac interdum dui dignissim.</p>
            <p>Suspendisse orci tellus, condimentum a nibh eu, viverra interdum ligula. Vestibulum sagittis orci et pharetra sodales. Cras eleifend est risus, eget vestibulum sapien tincidunt eget. </p>
            <p>Vestibulum cursus sed ligula ac volutpat. Nam consectetur sapien neque, in commodo nunc imperdiet quis. Nullam quis massa purus. Donec eu mauris non orci dignissim molestie.</p>

            <a href="#form_top" class="btn theme_btn mt-2">Take the Pledge</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="jarallax how_does">
    <picture>
      <source type="image/webp" srcset="images/mobile-image-2.webp" media="(max-width: 580px)">
      <source type="image/jpg" srcset="images/mobile-image-2.jpg" media="(max-width: 580px)">
      <source type="image/webp" srcset="images/parallex-2.webp">
      <source type="image/jpg" srcset="images/parallex-2.jpg">
      <img src="images/parallex-2.jpg" alt="#" class="jarallax-img">
    </picture>


    <div class="parallex-content h-100">

      <div class="banner_content h-100">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
              <div class="text_content text-white style_two">
                <h3 class="header_text position-relative mb-5">
                  How
                  does<br>it
                  affect
                </h3>
                <p>Vestibulum cursus sed ligula ac volutpat. Nam consectetur sapien neque, in commodo nunc imperdiet quis. Nullam quis massa purus. Donec eu mauris non orci dignissim molestie.
                </p>
                <p>Vestibulum cursus sed ligula ac volutpat. Nam consectetur sapien neque, in commodo nunc imperdiet quis. Nullam quis massa purus. Donec eu mauris non orci dignissim molestie.</p>
                <p>Vestibulum cursus sed ligula ac volutpat. Nam consectetur sapien neque, in commodo nunc imperdiet quis. Nullam quis massa purus. Donec eu mauris non orci dignissim molestie.</p>
                <p>Vestibulum cursus sed ligula ac volutpat. Nam consectetur sapien neque, in commodo nunc imperdiet quis. Nullam quis massa purus. Donec eu mauris non orci dignissim molestie.</p>
                <a href="#form_top" class="btn theme_btn mt-2">Take the Pledge</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="why_save gap-block">
    <div class="container">
      <div class="row my-lg-5 align-items-center">
        <div class="col-12 col-md-5">
          <img src="images/earth-iamge.png" alt="earth Image" class="img-fluid">
        </div>
        <div class="col-12 col-md-7">
          <div class="text_content defualt_style">
            <h3 class="header_text position-relative brfore_right mb-4">
              Initiative and<br>
              Programs
            </h3>
            <p class="text-right">Ut elit ipsum, pharetra at placerat non, sagittis pharetra magna. Nulla eget dui ac sem faucibus convallis sit amet vel mi. In vestibulum eu tortor ac tempor. Morbi nec mattis tellus. Donec sagittis vestibulum felis, aliquet porttitor ipsum feugiat sit amet.
            </p>



            <p class="text-right">Ut elit ipsum, pharetra at placerat non, sagittis pharetra magna. Nulla eget dui ac sem faucibus convallis sit amet vel mi. In vestibulum eu tortor ac tempor. Morbi nec mattis tellus. Donec sagittis vestibulum felis, aliquet porttitor ipsum feugiat sit amet.
            </p>
            <div class="text-lg-right text-center">
              <a href="#form_top" class="btn theme_btn mt-2">Take the Pledge</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="jarallax sree_heat gap-block">
    <picture>
      <source type="image/webp" srcset="images/mobile-image-4.webp" media="(max-width: 580px)">
      <source type="image/jpg" srcset="images/mobile-image-4.jpg" media="(max-width: 580px)">
      <source type="image/webp" srcset="images/parallex-4.webp">
      <source type="image/jpg" srcset="images/parallex-4.jpg">
      <img src="images/parallex-2.jpg" alt="#" class="jarallax-img">
    </picture>


    <div class="parallex-content h-100">

      <div class="banner_content h-100">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
              <div class="text_content text-white style_two">
                <h3 class="header_text position-relative mb-5">
                Ut elit ipsum<br>
                Donec sagittis
                </h3>
                <p>SNulla in congue est, ut vestibulum velit. Nunc pharetra mauris in blandit eleifend. Vestibulum suscipit odio eu mollis egestas. Donec laoreet ullamcorper felis, ut semper urna. Nullam tellus tellus, blandit id ante ac, suscipit varius nisi. Nam rhoncus ante non ipsum imperdiet, ac interdum dui dignissim.</p>
                <p>Suspendisse orci tellus, condimentum a nibh eu, viverra interdum ligula. Vestibulum sagittis orci et pharetra sodales. Cras eleifend est risus, eget vestibulum sapien tincidunt eget. Ut elit ipsum, pharetra at placerat non, sagittis pharetra magna. Nulla eget dui ac sem faucibus convallis sit amet vel mi. In vestibulum eu tortor ac tempor. Morbi nec mattis tellus. Donec sagittis vestibulum felis, aliquet porttitor ipsum feugiat sit amet.</p>


                <p>SNulla in congue est, ut vestibulum velit. Nunc pharetra mauris in blandit eleifend. Vestibulum suscipit odio eu mollis egestas. Donec laoreet ullamcorper felis, ut semper urna. Nullam tellus tellus, blandit id ante ac, suscipit varius nisi. Nam rhoncus ante non ipsum imperdiet, ac interdum dui dignissim.</p>
                <p>Suspendisse orci tellus, condimentum a nibh eu, viverra interdum ligula. Vestibulum sagittis orci et pharetra sodales. Cras eleifend est risus, eget vestibulum sapien tincidunt eget. Ut elit ipsum, pharetra at placerat non, sagittis pharetra magna. Nulla eget dui ac sem faucibus convallis sit amet vel mi. In vestibulum eu tortor ac tempor. Morbi nec mattis tellus. Donec sagittis vestibulum felis, aliquet porttitor ipsum feugiat sit amet.</p>


                <a href="#form_bottom" class="btn theme_btn mt-2">Take the Pledge</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="pledge gap-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text_content text-center">
            <h3 class="header_text position-relative mb-5">
              I Pledge!
            </h3>
            <p>nteger sit amet nulla sed ex tincidunt vulputate. Pellentesque lacinia vitae elit nec iaculis. Suspendisse potenti. Aliquam posuere, dui in blandit posuere, ante ipsum tempus sem, quis finibus est lectus et sem. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec hendrerit urna, non rhoncus diam. Proin at leo nisl. Ut posuere diam vel pellentesque hendrerit. </p>
            <p>Enteger sit amet nulla sed ex tincidunt vulputate. Pellentesque lacinia vitae elit nec iaculis. Suspendisse potenti. Aliquam posuere, dui in blandit posuere, ante ipsum tempus sem, quis finibus est lectus et sem. Vestibulum malesuada urna nibh, aliquet ornare quam bibendum et. Morbi posuere enim in dignissim feugiat. Vestibulum cursus sed ligula ac volutpat. </p>

            <a href="#form_bottom" class="btn theme_btn mt-2">Take the Pledge</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner_form gap-block pt-0" id="form_bottom">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="form_block form_style">
            <form action="lead.php" method="post" onsubmit="return validateFormtwo()">
              <div class="form-group position-relative">
                <span><img src="images/name-icon.png" alt="name"></span>
                <input type="text" class="form-control" name="name" id="nametwo" placeholder="Name">
                <span class="error-msg" id="nameerr"></span>
              </div>
             
              <div class="form-group position-relative">
                <span><img src="images/phone-icon.png" alt="name"></span>
                <input type="phone" class="form-control" name="number" id="numbertwo" placeholder="Phone">
                <span class="error-msg" id="numbererr"></span>
              </div>
              
              <div class="form-group position-relative">
                <span><img src="images/email-icon.png" alt="name"></span>
                <input type="email" class="form-control" name="email" id="emailtwo" placeholder="Email">
                <span class="error-msg" id="emailerr"></span>
              </div>
             
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="box" id="box2" value="Yes" checked>
                <label class="custom-control-label text-white" for="box2">I am okay with receiving marketing information from your website</label>
              </div>
              <input type="hidden" name="utm_src" id="utm_src_two" value="<?php echo $_GET['utm_source']; ?>">
              <input type="hidden" name="utm_med" id="utm_med_two" value="<?php echo $_GET['utm_medium']; ?>">
              <input type="hidden" name="utm_camp" id="utm_camp_two" value="<?php echo $_GET['utm_campaign']; ?>">
              <input type="hidden" name="utm_term" id="utm_term_two" value="<?php echo $_GET['utm_term']; ?>">
              <input type="hidden" name="utm_cont" id="utm_cont_two" value="<?php echo $_GET['utm_content']; ?>">
              <input type="hidden" name="utm_refer" id="utm_refer_two" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
              <input type="hidden" name="ip_add" id="ip_add_two" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

              <div class="form-group position-relative mt-4">
                <input type="submit" class="form-control submit_btn" value="I Pledge!">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="jarallax savethesoil gap-block">
    <picture>
      <source type="image/webp" srcset="images/mobile-image-5.webp" media="(max-width: 580px)">
      <source type="image/jpg" srcset="images/mobile-image-5.jpg" media="(max-width: 580px)">
      <source type="image/webp" srcset="images/parallex-5.webp">
      <source type="image/jpg" srcset="images/parallex-5.jpg">
      <img src="images/parallex-2.jpg" alt="#" class="jarallax-img">
    </picture>


    <div class="parallex-content h-100">

      <div class="banner_content h-100">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
              <div class="text_content text-white style_two">
                <h3 class="header_text position-relative text-right before_none">
                lorem ipsum
                </h3>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer_block gap-block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="footer_content">
            <img src="images/footer-logo.jpg" alt="footer_logo">

          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="social_block text-right">
            <ul class="list-unstyled d-flex">
              <li><a href="#"><img src="images/insta.png" alt="Instagram"></a></li>
              <li><a href="#"><img src="images/facebook.png" alt="facebook"></a></li>

            </ul>

            <p class="font-weight-bold mb-0">&#169; 2022 all rights reserved</p>
            <a href="#" class="links">privacy policy</a>
            <br>
            <a href="#" class="links">terms & conditions</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jarallax.min.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="scripttwo.js"></script>
</body>

</html>