<?php
    require_once 'vendor/autoload.php';

use Serps\SearchEngine\Google\GoogleClient;
use Serps\HttpClient\CurlClient;
use Serps\SearchEngine\Google\GoogleUrl;
use Serps\Core\Browser\Browser;

$userAgent = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36";
$browserLanguage = "fr-FR";

$browser = new Browser(new CurlClient(), $userAgent, $browserLanguage);
//https://serp-spider.github.io/documentation/search-engine/google/parse-page/
// Create a google client using the browser we configured
$googleClient = new GoogleClient($browser);

// Create the url that will be parsed
$googleUrl = new GoogleUrl();
$googleUrl->setSearchTerm('opinie');

$response = $googleClient->query($googleUrl);

$results = $response->getNaturalResults();

foreach($results as $result){
    var_dump($result->getData());
}