<?php

namespace Moderator\lib;


class Domain {

    public $domain;

    public function __construct($domain){
        $this->domain = $domain;
    }
    public function isAvailible()
    {
        if(!filter_var($this->domain, FILTER_VALIDATE_URL))
        {
            return false;
        }

        $curlInit = curl_init($this->domain);
        curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
        curl_setopt($curlInit,CURLOPT_HEADER,true);
        curl_setopt($curlInit,CURLOPT_NOBODY,true);
        curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

        $response = curl_exec($curlInit);

        curl_close($curlInit);

        if ($response) return true;
        
    }
    
}