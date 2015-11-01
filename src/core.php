<?php
$sochEndpoint = 'http://kulturarvsdata.se/';

function sochQueryRequest($queryString, $sochEndpoint) {
  $url = $sochEndpoint . $queryString;
  $content = file_get_contents($url);

  foreach ($http_response_header as $header) {
    header($header);
  }

  header('Access-Control-Allow-Origin: *');

  echo $content;
}
