<?php
    require_once 'vendor/autoload.php';
    
    use Moderator\lib\GoogleScraper;
        
//
//$file = 'https://www.google.com/search?as_q=opinie&as_epq=&as_oq=&as_eq=&as_nlo=&as_nhi=&lr=&cr=&as_qdr=all&as_sitesearch=&as_occt=any&safe=images&as_filetype=&as_rights=';
//$doc = new DOMDocument();
//@ $doc->loadHTMLFile($file);
//
//$xpath = new DOMXpath($doc);
//
//
//// example 2: for node data in a selected id
////$elements = $xpath->query("/html/body/div[@id='yourTagIdHere']");
//
//// example 3: same as above with wildcard
////$elements = $xpath->query("//h3[@class='r']");
//$elements = $xpath->query('//h3[@class="r"]//a');
//
////$elements = $xpath->query("//h3[@class='r']");
////$elements = $xpath->query("//h3[@class='r']/a");
//
//if (!is_null($elements)) {
//  foreach ($elements as $element) {
//       var_dump($element);
//       
//  }
//}

//ktoś wkleja link, słowo, nazwe produktu itd, czas 
// lang
ini_set ( 'max_execution_time', 0);
$obj=new GoogleScraper();
// Pass your keyword and proxy ip here.
$arr=$obj->getUrlList(urlencode('opinie'),'');
print_r($arr);
