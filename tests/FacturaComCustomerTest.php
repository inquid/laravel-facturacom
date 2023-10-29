<?php

use Inquid\LaravelFacturacom\Clients\GuzzleHttpClient;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertIsArray;

it('I can list the CFDIs of my account', function () {
    $meAsACustomer = new class
    {
        protected GuzzleHttpClient $guzzleHttpClient;

        public function __construct()
        {
            $this->guzzleHttpClient = new GuzzleHttpClient();
        }

        use Inquid\LaravelFacturacom\Traits\FacturaComCustomer;
    };

    $cfdis = $meAsACustomer->getCfdis();
    assertIsArray($cfdis);
    assertEquals('success', $cfdis['status']);
    assertEquals('success', $cfdis['response']);
    assertEquals(8, $cfdis['total']);
});
