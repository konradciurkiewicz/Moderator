<?php

namespace Moderator\lib;

use Moderator\lib\Domain;

class File {
    public $domain;
    public $file;
    public $headers;
    public $contentType; 

    public function __construct($file) {
        
        $this->domain = new Domain($file);

        if ($this->domain->isAvailible()){ 
            $this->file = $file;
        }
        else{
            $this->file = false;
        }
        
        if($this->file){
            $this->headers = get_headers($file, 1);
            $this->contentType = $this->headers['Content-Type'];
        }
    }
    public function exist() {
        if (!$this->headers || $this->headers[0] == 'HTTP/1.1 404 Not Found') {
            return false;
        } else {
            return true;
        }
    }
    public function available(){
        if ( $this->exist() && $this->headers[0] == 'HTTP/1.1 200 OK') {
            return true;
        } else {
            return false;
        }
    }
    public function getSourceType(){
        if ($this->available()){
            $sourceType = explode('/', $this->contentType);
            return $sourceType[0];
        }
        else {
            return false;
        }
    }

}