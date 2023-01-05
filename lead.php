<?php

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$box = $_POST['box'];
$utm_src = $_POST['utm_src'];
$utm_med = $_POST['utm_med'];
$utm_camp = $_POST['utm_camp'];
$utm_term = $_POST['utm_term'];
$utm_cont = $_POST['utm_cont'];
$utm_refer = $_POST['utm_refer'];
$ip_add = $_POST['ip_add'];

if($box == 'Yes')
{
  $box = 'YES';
}
else{
  $box = 'NO';
}

if($name!='' && $number!=''  && $email!='')
{
  $data = array(
        'entry.1931435265' => $name,
        'entry.1280436068' => $number,
        'entry.1868600916' => $email,
        'entry.686551516' => $box,
        'entry.1798322454' => $utm_src,
        'entry.891038087' => $utm_med,
        'entry.1012122380' => $utm_camp,
        'entry.645040606'  => $utm_term,
        'entry.536377380' => $utm_cont,
        'entry.376322608' => $utm_refer,
        'entry.540583899' => $ip_add,
     );

    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'INSERT YOUR GOOGLE SHEET LINK HERE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);

     header('Location: thank-you.php?name='.$name);


}

 ?>