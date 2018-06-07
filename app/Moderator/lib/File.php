<?php

namespace Moderator\lib;


class File {
    public $file;
    public function __construct($file) {
        $this->file = $file;
    }
    public function exist() {
        $fileHeaders = get_headers($this->file);
        var_dump($fileHeaders);
        if (!$fileHeaders || $fileHeaders[0] == 'HTTP/1.1 404 Not Found') {
            return false;
        } else {
            return true;
        }
    }
} 