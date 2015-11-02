<?php
$sochEndpoint = 'http://kulturarvsdata.se/';

function sochQueryRequest($queryString, $sochEndpoint) {
  $url = $sochEndpoint . $queryString;

  $incomingHeaders = getallheaders();
  if (array_key_exists('Accept format', $incomingHeaders) && ($incomingHeaders == 'application/json' || 'application/json-ld' || 'application/ld-json')) {
    $opts = array(
      'http' => array(
        'method' => "GET",
        'header' => "Accept format: application/json\r\n"
      )
    );
  } else {
    $opts = array(
      'http' => array(
        'method' => "GET",
        'header' => "Accept format: *\r\n"
      )
    );
  }

  $context = stream_context_create($opts);
  $content = file_get_contents($url, false, $context);

  foreach ($http_response_header as $header) {
    header($header);
  }

  header('Access-Control-Allow-Origin: *');

  echo $content;
}
