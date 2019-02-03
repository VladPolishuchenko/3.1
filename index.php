<?php
$a = 'http://www.google.com.ua?23=234&=1232&=144';
$parsedUrl = parse_url($a);
$domainsFile = file_get_contents('https://data.iana.org/TLD/tlds-alpha-by-domain.txt');
$domains = explode(PHP_EOL, $domainsFile);
$hostChunk = explode('.', $parsedUrl['host']);
var_dump($hostChunk);

$result = [];

$result['scheme'] = $parsedUrl['scheme'];
$result['host'] = $parsedUrl['host'];
$result['query'] = $parsedUrl['query'];
$result['tld'] = $parsedUrl['tld'];
var_dump($result);

