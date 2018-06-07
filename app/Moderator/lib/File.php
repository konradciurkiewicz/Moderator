<?php

namespace Moderator\lib;


class File {
    public $file;
    public $headers;


    public function __construct($file) {
        $this->file = $file;
        $this->headers = get_headers($file);
    }
    public function exist() {
        var_dump($this->headers);
        if (!$this->headers || $this->headers[0] == 'HTTP/1.1 404 Not Found') {
            return false;
        } else {
            return true;
        }
    }
    public function available(){
        if (!$this->headers || $this->headers[0] == 'HTTP/1.1 200 OK') {
            return false;
        } else {
            return true;
        }
    }
}