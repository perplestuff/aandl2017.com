<?php

class requests
{
    public static function URI()
    {
        return trim (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
    }
}
