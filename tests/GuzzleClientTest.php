<?php

use Inquid\LaravelFacturacom\Clients\GuzzleHttpClient as InquidClient;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;

it('A Guzzle client is generated when Client class is called', function () {
    $mockGuzzleClient = Mockery::mock(InquidClient::class);
    // Create a mock for the StreamInterface
    $streamMock = Mockery::mock(StreamInterface::class);
    // Set up the stream behavior
    $streamMock->shouldReceive('getContents')->andReturn('{"status": "success"}');
    // Create a mock for the ResponseInterface
    $responseMock = Mockery::mock(ResponseInterface::class);
    $responseMock->shouldReceive('getStatusCode')->andReturn(200);
    $responseMock->shouldReceive('getBody')->andReturn($streamMock);

    $mockGuzzleClient->shouldReceive('get')->andReturn($responseMock);
    $getCall = $mockGuzzleClient->get('/');
    assertInstanceOf(ResponseInterface::class, $getCall);
    assertEquals(200, $getCall->getStatusCode());
    assertEquals('{"status": "success"}', $getCall->getBody()->getContents());
});
