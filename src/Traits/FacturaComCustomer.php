<?php

namespace Inquid\LaravelFacturacom\Traits;

trait FacturaComCustomer
{
    /**
     * Returns the list of CFDIs on the account
     */
    public function getCfdis(array $pagination = []): array
    {
        $response = $this->guzzleHttpClient->get('v4/cfdi40/list', [
            'query' => $pagination,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
