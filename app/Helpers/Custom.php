<?php

use Illuminate\Support\Facades\Session;

/**
 * Check if the application is running in a production environment.
 *
 * This function checks the application's RELEASE_STATUS configuration setting to determine if it's in a production environment.
 *
 * @return bool True if the application is in production; false if it's not.
 */
if (!function_exists('onProduction')) {
    function onProduction()
    {
        return config('mhc_config.RELEASE_STATUS') == 'staging' ? false : true;
    }
}
if (!function_exists('smsCredentials')) {
    function smsCredentials($number, $otp)
    {
        try {
            $id = env("TWILIO_SID");
            $token = env("TWILIO_TOKEN");
            $url = "https://api.twilio.com/2010-04-01/Accounts/$id/SMS/Messages";
            $from = env("TWILIO_FROM");
            $to = $number; // twilio trial verified number
            $body = "Use This OTP For Verification " . $otp;
            $data = array(
                'From' => $from,
                'To' => $to,
                'Body' => $body,
            );
            $post = http_build_query($data);
            $x = curl_init($url);
            curl_setopt($x, CURLOPT_POST, true);
            curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
            curl_setopt($x, CURLOPT_POSTFIELDS, $post);
            $y = curl_exec($x);
            curl_close($x);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
function sendOtp($mobile_no)
{
    $otp = rand(1001, 9999);
    $response = smsCredentials($mobile_no, $otp);
    return $response ? $otp : null;
}

function accessToken()
{
    $length = 30; // Desired length of the access token
    $bytes = random_bytes($length);
    $accessToken = bin2hex($bytes);

    return $accessToken;
}
