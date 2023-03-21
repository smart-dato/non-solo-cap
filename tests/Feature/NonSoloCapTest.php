<?php

use SmartDato\NonSoloCap\Services\NonSoloCap;

test('can validate zip code', function () {
    expect(NonSoloCap::validZipcode('42'))->toBeTrue();
    expect(NonSoloCap::validZipcode('0042'))->toBeTrue();
});
