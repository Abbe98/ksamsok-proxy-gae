<?php
// SOCH endpoint without trailing slash
$sochEndpoint = 'http://kulturarvsdata.se/';

function sochQueryRequest($queryString, $sochEndpoint) {
  $url = $sochEndpoint . $queryString;
  $content = file_get_contents($url);

  foreach ($http_response_header as $header) {
    header($header);
  }

  echo $content;
}