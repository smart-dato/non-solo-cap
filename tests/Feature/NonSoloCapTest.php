<?php

use SmartDato\NonSoloCap\Services\NonSoloCap;

test('can gen url', function () {
    expect(NonSoloCap::generateUrl('99999', 'foo'))
        ->toBe('https://www.nonsolocap.it/?k=99999&c=foo');
});

test('can validate zip code', function () {

    expect(NonSoloCap::validZipcode('99999'))->toBeFalse();
    expect(NonSoloCap::validZipcode('39021'))->toBeTrue();
});
