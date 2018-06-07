<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('vendor/autoload.php');
        
        use Moderator\lib\File;
        
        $file = new File('http://oleszyce.pl.zetorzeszow.eu/?c=mdGal-cmMiniaturka-0-378-800-600.jpg');
        $file->exist();
        $file->available();
        var_dump(is_dir('http://localhost/Teatr/'));
        ?>
    </body>
</html>
