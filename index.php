<?php
    require ('vendor/autoload.php');
        
    use Moderator\lib\File;
        
    $file = new File('http://oleszyce.pl.zetorzeszow.eu/?c=mdGal-cmMiniaturka-0-378-800-600.jpg');
    $file->exist();
    $file->available();
