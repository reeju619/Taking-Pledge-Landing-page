
<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        cellpadding="0" cellspacing="0" border="0">
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
                        <td style="text-align: center;padding-top: 30px;">
                            <form>
                                <?php if(isset($_GET['name'])){ ?>
                                
                                <input type="text" value="<?php echo $_GET['name']; ?>"
                                    style="width: 590px;font-size: 18px; border: 0; background-color: transparent; text-align:center;"
                                    disabled>
                                <?php } ?>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px;color: #000; text-align: center;padding-left: 80px;padding-right: 80px;padding-top: 30px;font-weight: 500;">
                        Nulla in congue est, ut vestibulum velit. 
                        Nunc pharetra mauris in blandit eleifend. 
                        Vestibulum suscipit odio eu mollis egestas. 
                        Donec laoreet ullamcorper felis, ut semper urna. Nullam tellus tellus, blandit id ante ac, suscipit varius nisi. Nam rhoncus ante non ipsum imperdiet, 
                        ac interdum dui dignissim.
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
        
    </table>
</body>

</html>