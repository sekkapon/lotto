<?php

namespace App\Libraries;

class My_Library
{
    /* generate salt */
    public function salt()
    {
        $raw_salt_len = 16;
        $buffer = '';

        $bl = strlen($buffer);
        for ($i = 0; $i < $raw_salt_len; $i++) {
            if ($i < $bl) {
                $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
            } else {
                $buffer .= chr(mt_rand(0, 255));
            }
        }
        $salt = $buffer;
        $base64_digits = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $base64_string = base64_encode($salt);
        $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

        $salt = substr($salt, 0, 31);

        echo $salt;
        die;
    }

    /* เข้ารหัส password */
    public function hash_password($password)
    {
        $salt = 'g7xGelgGiGZoDy0W2bMIG.';
        if (empty($password)) {
            return false;
        }

        // echo sha1($password . $salt);
        // die;
        return sha1($password . $salt);
    }


    /* IP Address */
    function getIpAddress()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        return $ipaddress;
    }

    public function isLoggedIn()
    {
        return $this->session->has(getenv('session_name'));
    }
}
