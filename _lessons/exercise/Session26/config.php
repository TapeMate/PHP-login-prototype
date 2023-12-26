<?php

// session use only cookie prevents session fixation / value 1 = true
ini_set("session.use_only_cookies", 1);
// make sure only uses session id created by server in our webside
ini_set("session.use_strict_mode", 1);

// set parameters to the cookie do make it more secure
// all this params have to be set befor starting the session
session_set_cookie_params([
    "lifetime" => 1800,
    "domain" => "localhost",
    "path" => "/",
    "secure" => true,
    "httponly" => true
]);

session_start();

// checking if session variable is created inside last_regeneration
if (!isset($_SESSION["last_regeneration"])) {

    // regenerate it if not
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
} else {

    // defines the time to pass to regenerate
    $interval = 60 * 30;

    // condition if time passed is >= the defined intervall to regenerate the session id
    if (time() - $_SESSION["last_regeneration"] >= $interval) {

        session_regenerate_id(true);
        // reset session id with regeneration
        $_SESSION["last_regeneration"] = time();
    }
}