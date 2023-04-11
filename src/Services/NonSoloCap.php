<?php

namespace SmartDato\NonSoloCap\Services;

use GuzzleHttp\Client;

class NonSoloCap
{
    /** @var string base */
    private const base = 'https://www.nonsolocap.it/';

    /** @var string not_found */
    private const not_found = 'non ha prodotto risultati.';

    public static function generateUrl(
        string|int $zipcode = '',
        string $location = ''
    ): string {
        return self::base."?k=$zipcode&c=$location";
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function validZipcode(string|int $zipcode): bool
    {
        $client = new Client([
            'base_uri' => self::base
        ]);

        $response = $client->get(
            uri: '/cap',
            options: [
                'query' => [
                    'k' => $zipcode,
                    'b' => '',
                    'c' => '',
                ]
            ]
        );

        $body = (string) $response->getBody();

        return ! str_contains($body, self::not_found);
    }
}
