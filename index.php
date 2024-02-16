<?php
// Generate two random hexadecimal strings of length 20
$rand1 = bin2hex(random_bytes(10));
$rand2 = bin2hex(random_bytes(10));

// Construct the redirect URL with random parameters
$redirectUrl = "https://dorsite-88mys2qnw-ula0709s-projects.vercel.app/indexpaginaprincipal.html/?param1=$rand1&param2=$rand2";

// Perform the redirect
?>