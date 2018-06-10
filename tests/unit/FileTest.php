<?php 
include_once '../../vendor/autoload.php';
use Moderator\lib\File;

class FileTest extends PHPUnit_Framework_TestCase {

    private function execute($file){
        return new File($file);
    }


    public function testExistFileReturnTrue()
    {

        $existFile = $this->execute('http://www.php.net/');

        $this->assertEquals( true, $existFile->exist());
    }

    public function testNotExistFileReturnFalse()
    {
        $notExistFile = $this->execute('http://localdasdsdhost/neverexistfile');

        $this->assertEquals(false, $notExistFile->exist());
    }

    public function testAvailableFileReturnTrue(){
        $existFile = $this->execute('http://www.php.net/');

        $this->assertEquals(true, $existFile->available());
    }

    public function testFileReturnType(){
        $file = $this->execute('http://www.php.net/');
        
        $this->assertNotNull($file->getSourceType());
    }
}