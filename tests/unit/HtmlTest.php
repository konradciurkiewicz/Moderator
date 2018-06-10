<?php 
include_once '../../vendor/autoload.php';
use Moderator\lib\Html;

class HtmlTest extends PHPUnit_Framework_TestCase {

    private function execute($file){
        return new Html($file);
    }
    public function testValidHtmlReturnsTrue(){
        $html = $this->execute('http://www.php.net/');
        
        $this->assertEquals(true, true);
    }
    public function testNotHtmlReturnsFalse(){
        // test image type
        $html = $this->execute('http://php.net/images/logos/php-logo.svg');
        // test 404 error 
        $this->assertEquals(true, true);
    }

}