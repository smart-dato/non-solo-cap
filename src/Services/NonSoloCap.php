<?php

namespace SmartDato\NonSoloCap\Services;

use Illuminate\Support\Facades\Http;

class NonSoloCap
{
    /** @var string base */
    private const base = 'https://www.nonsolocap.it/';

    /** @var string not_found */
    private const not_found = 'non ha prodotto risultati.';

    public static function generateUrl(string|int $zipcode = '', string $location = ''): string
    {
        return "self::base?k=$zipcode&c=$location";
    }

    public static function validZipcode(string|int $zipcode): bool
    {
        $response = Http::get(self::base.'/cap', [
            'k' => $zipcode,
            'b' => '',
            'c' => '',
        ]);

        return ! str($response->body()) // @phpstan-ignore-line
            ->contains(self::not_found);
    }
}
