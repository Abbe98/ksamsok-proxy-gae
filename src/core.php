<?php
// SOCH endpoint without trailing slash
$sochEndpoint = 'http://kulturarvsdata.se/';

function sochQueryRequest($queryString, $sochEndpoint) {
  $url = $sochEndpoint . $queryString;
  $content = file_get_contents($url);

  foreach ($http_response_header as $header) {
    header($header);
  }

  if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
  }

  echo $content;
}
