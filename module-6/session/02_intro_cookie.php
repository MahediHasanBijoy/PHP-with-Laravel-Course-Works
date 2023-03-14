<?php
// Cookie: cookie data is stored on clients browser


// create a cookie
// setcookie('user', 'bijoy', time()+300);

echo $_COOKIE['user'] ?? 0;


// destroy a cookie
setcookie('user', 'bijoy', time()-3600);