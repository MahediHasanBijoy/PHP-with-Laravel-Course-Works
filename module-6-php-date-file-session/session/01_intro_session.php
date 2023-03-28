<?php

// Introduction to session
// Session data will be stored on server and session id on clients browser

//session_name() must be called before session_start() for the session to work properly.
session_name("myapp");
// start a session
session_start([
    'cookie_lifetime' => 60     //seconds
]);

$_SESSION['counter'] = $_SESSION['counter'] ?? 0;

$_SESSION['counter']++;

echo $_SESSION['counter'];

$_SESSION['name'] = 'bijoy';

echo $_SESSION['name'];
