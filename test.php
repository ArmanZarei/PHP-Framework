<?php
use PHPUnit\Framework\TestCase;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

class IndexTest extends TestCase
{
    public function testHello()
    {
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'http://localhost/PHP-framework/index.php?name=Arman');

        $this->assertEquals(\Symfony\Component\HttpFoundation\Response::HTTP_OK, $response->getStatusCode());
        $this->assertEquals('Hello Arman', $response->getContent());
    }
}
