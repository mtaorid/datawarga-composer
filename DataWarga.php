<?php

use GuzzleHttp\Client;

class DataWarga {
  private $BASE_URL = 'https://api.mta.or.id';
  private $API_KEY;

  function __construct($api_key)
  {
    $this->API_KEY = $api_key;
  }

  function getAllWarga($majlis_id){
    $client = new Client([
      'base_uri' => $this->BASE_URL
    ]);
    $res = $client->request('GET', '/warga/v2', [
      'query' => [
        'majlis' => $majlis_id
      ],
      'headers' => [
        'Authorization' => 'Bearer '.$this->API_KEY
      ]
    ]);
    $body = $res->getBody();
    return json_decode($body->data);
  }
}
?>