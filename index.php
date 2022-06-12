<title>SITEON CHANGER</title>
<?php
$url = $_GET['url'];
$url = str_replace('http://', '', $url);
$url = str_replace('https://', '', $url);
echo '<meta http-equiv="refresh" content="0;URL=https://siteon.f5.si/'.$url.'">'
?>
