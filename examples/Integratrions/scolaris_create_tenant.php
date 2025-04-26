<?php
require 'vendor/autoload.php';

use ScolarisSdk\HttpApiClient;
use ScolarisSdk\Models\Administrative;
use ScolarisSdk\ScolarisClient;

$adminApiUrl = 'http://localhost:8102';

$apiClient = new HttpApiClient();
$apiClient->setBaseUrl($adminApiUrl);

$keyResponse = $apiClient->get('key');
$apiKey = $keyResponse['key'];

$cronofyClient = new ScolarisClient($apiKey, $adminApiUrl);

$adminitrative = new Administrative(
    name: 'Admin',
    lastName: 'User',
    email: 'example@scolaris.cl',
);

$tenant = $cronofyClient->tenants()->create('testing', 'Test Tenant', $adminitrative);

print_r($tenant->toArray());
