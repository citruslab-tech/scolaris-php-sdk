<?php
require 'vendor/autoload.php';

use ScolarisSdk\HttpApiClient;
use ScolarisSdk\ScolarisClient;

$adminApiUrl = 'http://localhost:8102';

$apiClient = new HttpApiClient();
$apiClient->setBaseUrl($adminApiUrl);

$keyResponse = $apiClient->get('key');
$apiKey = $keyResponse['key'];

$cronofyClient = new ScolarisClient($apiKey, $adminApiUrl);

$tenant = $cronofyClient->tenants()->create('testing', 'Test Tenant');

print_r($tenant->toArray());
