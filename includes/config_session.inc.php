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

//check if user is currently logged in
if (isset($_SESSION["user_id"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_loggedin();
    } else {

        $interval = 60 * 30;

        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id_loggedin();
        }
    }
} else {
    // checking if session variable is created inside last_regeneration
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id();
    } else {

        // defines the time to pass to regenerate / update cookie
        $interval = 60 * 30;

        // condition if time passed is >= the defined intervall to regenerate the session id
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id();
        }
    }
}



function regenerate_session_id()
{
    if (isset($_SESSION["user_id"])) {
        session_regenerate_id();
        $userId = $_SESSION["user_id"];
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $userId;
        session_id($sessionId);
    } else {
        session_regenerate_id();
    }

    $_SESSION["last_regeneration"] = time();
}

function regenerate_session_id_loggedin()
{
    session_regenerate_id(true);
    // reset session id with regeneration
    $_SESSION["last_regeneration"] = time();
}