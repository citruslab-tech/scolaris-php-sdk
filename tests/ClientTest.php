<?php

namespace ScolarisSdk\Tests;

use ScolarisSdk\HttpApiClient;
use PHPUnit\Framework\TestCase;
use ScolarisSdk\ScolarisClient;

class ClientTest extends TestCase
{
    private ScolarisClient $scolarisClient;
    private $httpApiClientMock;

    protected function setUp(): void
    {
        $this->httpApiClientMock = $this->createMock(HttpApiClient::class);

        $this->scolarisClient = new scolarisClient('fake_api_key', 'https://api.example.com');
        $reflection = new \ReflectionClass($this->scolarisClient);
        $httpApiClientProperty = $reflection->getProperty('httpApiClient');
        $httpApiClientProperty->setAccessible(true);
        $httpApiClientProperty->setValue($this->scolarisClient, $this->httpApiClientMock);
    }
}
