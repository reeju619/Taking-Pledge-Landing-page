<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$stylesheet = file_get_contents('css/custom.css');
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML('<table
style="background-size: 100%; border: 0; width: 100%; height: 642px; margin: 0px auto; background-image: url(images/bag-box.png); background-repeat: no-repeat; color: #000; font-family: Poppins, sans-serif;"
cellpadding="0" cellspacing="0" border="0">
<tr>
    <td style="vertical-align: baseline; height: 642px;">
        <table style="width: 90%;" cellpadding="0" cellspacing="0" border="0">
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
                <td style="text-align: center; padding-top: 5px;">
				<table width="35%">
            <tr>
                <td style="text-align: center; margin: auto; background-color: #d9d9d9; margin-top: 17px; font-size: 20px;font-weight: 500; padding: 5px; display:block; padding:10px;">
                        Pledge
                </td>
            </tr>
			</table>
			</td>
            </tr>
			<tr>
                <td style="text-align: center; padding-top: 5px;">
				<table width="95%">
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
			</table>
			 </td>
            </tr>
			<tr>
                <td style="text-align: center; padding-top: 5px;">
				<table width="35%">
            <tr>
            <tr>
                <td style="text-align: center;padding-top: 10px; font-size: 30px; line-height:36px; color:#0069b2;">'.$_GET['name'].'
                </td>
            </tr>
			</table>
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

</table>');
$mpdf->Output($_GET['name'].'-certificate.pdf', \Mpdf\Output\Destination::DOWNLOAD);
?>