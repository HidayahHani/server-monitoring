<?php

namespace App\Services;

class UrlChecker 
{
    public function checkUrlStatus(string $url)
    {
        $url = "https://www.youtube.com";

        $response = Http::get($url);
    }
}