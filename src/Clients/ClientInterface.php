<?php

namespace Inquid\LaravelFacturacom\Clients;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * @throws GuzzleException
     */
    public function get(string $url, array $options = []): ResponseInterface;

    /**
     * @throws GuzzleException
     */
    public function post(string $url, array $options = []): ResponseInterface;

    /**
     * @throws GuzzleException
     */
    public function put(string $url, array $options = []): ResponseInterface;

    /**
     * @throws GuzzleException
     */
    public function delete(string $url, array $options = []): ResponseInterface;

    /**
     * @throws GuzzleException
     */
    public function patch(string $url, array $options = []): ResponseInterface;
}
