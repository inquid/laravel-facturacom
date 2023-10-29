<?php

namespace Inquid\LaravelFacturacom\Clients;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Mockery\MockInterface;
use Psr\Http\Message\ResponseInterface;

class GuzzleHttpClient implements ClientInterface
{
    protected ?Client $client = null;

    /**
     * GuzzleClient constructor.
     */
    public function __construct(Client|MockInterface $client = null)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'F-PLUGIN' => config('facturacom.plugin'),
            'F-Api-Key' => config('facturacom.api_key'),
            'F-Secret-Key' => config('facturacom.secret_key'),
        ];
        // Add headers to the client
        $this->client = $client ?? new Client([
            'base_uri' => config('facturacom.base_uri'),
            'headers' => $headers,
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function get(string $url, array $options = []): ResponseInterface
    {
        return $this->client->get($url, $options);
    }

    /**
     * @throws GuzzleException
     */
    public function post(string $url, array $options = []): ResponseInterface
    {
        return $this->client->post($url, $options);
    }

    /**
     * @throws GuzzleException
     */
    public function put(string $url, array $options = []): ResponseInterface
    {
        return $this->client->put($url, $options);
    }

    /**
     * @throws GuzzleException
     */
    public function delete(string $url, array $options = []): ResponseInterface
    {
        return $this->client->delete($url, $options);
    }

    /**
     * @throws GuzzleException
     */
    public function patch(string $url, array $options = []): ResponseInterface
    {
        return $this->client->patch($url, $options);
    }
}
