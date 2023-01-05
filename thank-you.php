<?php
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    $url = "https://";   
else  
    $url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];   

//echo $url;
?>

<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">


<!-- Object Fit polyfill -->
<script src="https://unpkg.com/object-fit-images/dist/ofi.min.js"></script>

<!-- Lazy Load images -->
<!-- <script src="https://unpkg.com/object-fit-images/dist/ofi.min.js"></script> -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

<title>Thank You Page</title>

<script>
 
  //function to get name from the google form and put it in the thank you page
  function getName() {
    var name = document.getElementById("name").value;
    document.getElementById("name-display").innerHTML = name;
  }


</script>
</head>
<body>
<table
        style="width: 100%;border: 0;width: 900px;height: 680px;margin: 0px auto;background-image: url(images/bag-box.png); background-repeat: no-repeat; color: #000;font-family: 'Poppins', sans-serif;"
        cellpadding="0" cellspacing="0" border="0" id="PDFcontent">
        <tr>
            <td style="vertical-align: baseline">
                <table style="width: 100%;" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="text-align: center;padding-top: 60px;font-weight: 600;font-size: 22px;">Become A Soil
                            Saviour To </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 5px;">
                            <img src="images/save-image.png" alt="" style="height: 45px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <p
                                style="width: 300px;margin: auto; background-color: #d9d9d9; margin-top: 17px; font-size: 20px;font-weight: 500; padding: 5px;">
                                Pledge</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;font-size: 20px;font-weight: 600;color: #000;padding-top: 50px;">
                            ‘THE EARTH IS WHAT WE ALL HAVE IN COMMON- WENDELL BERRY’
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:center;color: #000;font-size: 24px;font-weight: 600;padding-top: 20px;">
                            This certificate is proudly presented to
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;padding-top: 10px;">
                            <form>
                                <?php if(isset($_GET['name'])){ ?>
                                
                                <input type="text" value="<?php echo $_GET['name']; ?>"
                                    style="width: 590px;font-size: 30px; line-height:36px; border: 0; background-color: transparent; text-align:center; color:#0069b2;"
                                    disabled>
                                <?php } ?>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px;color: #000; text-align: center;padding-left: 80px;padding-right: 80px;padding-top: 30px;font-weight: 500;">
                            for taking the pledge to save the soil. Congratulations on becoming a soil saviour. Hereby,
                            you are now ready to spread awareness among people on how switching to the eco-friendly and
                            soil-loving AAC blocks can truly help us save the soil.
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;padding-top: 10px;">
                            <img src="images/flower.png" alt="" style="height: 90px;">
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
        <?php if(isset($_GET['name'])){ ?>
        <tr>
            <td class="float-right pb-3 pt-4" style="vertical-align: baseline">
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style pt-3" data-a2a-url="<?php echo $url;?>" data-a2a-title="<?php echo $_GET['name']; ?> Certificate">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_linkedin"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
            </td>
        </tr>
        <tr>
          <td class="float-right pb-3 pt-1"><a id=”gpdf” href="http://savethesoil.magical-leavitt.143-244-131-3.plesk.page/certificatepdf.php?name=<?php echo $_GET['name']; ?>" target="_blank" class="btn btn-primary" download>Download AS PDF</a></td>
        </tr>
        <?php } ?>
    </table>
<div class="footer_block gap-block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="footer_content">
            <img src="images/footer-logo.jpg" alt="footer_logo">
            <div class="d-flex mt-5">
              <ul class="list-unstyled m-0 p-0">
                <li><a href="#">Soil</a></li>
                <li><a href="#">Supporters</a></li>
                <li><a href="#">events</a></li>
                <li><a href="#">toolkit</a></li>
              </ul>
              <ul class="list-unstyled ml-4 p-0">
                <li><a href="#">Medis</a></li>
                <li><a href="#">contact</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">daily activity</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="social_block text-right">
            <ul class="list-unstyled d-flex">
              <li><a href="#"><img src="images/insta.png" alt="Instagram"></a></li>
              <li><a href="#"><img src="images/facebook.png" alt="facebook"></a></li>
              <li><a href="#"><img src="images/youtube.png" alt="Instagram"></a></li>
              <li><a href="#"><img src="images/twitter.png" alt="Instagram"></a></li>
              <li><a href="#"><img src="images/linked.png" alt="Instagram"></a></li>
            </ul>
         
          <p class="font-weight-bold mb-0">&#169; 2022 conscious planet all rights reserved</p>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jarallax.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>