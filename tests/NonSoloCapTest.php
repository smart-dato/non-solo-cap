<?php

use SmartDato\NonSoloCap\Services\NonSoloCap;

test('can validate zip code', function () {
    $this->assertTrue(NonSoloCap::validZipcode('42'));
    $this->assertTrue(NonSoloCap::validZipcode('0042'));
});
