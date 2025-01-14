<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\Forbrugsforeningen;

class ForbrugsforeningenTest extends BaseCardTests
{
    public $instance = Forbrugsforeningen::class;

    public function validNumbers(): Collection
    {
        return collect([
            '6007220000000004',
        ]);
    }

    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '6007220',
            '60072200000000041',
            '600722000000000',
        ]);
    }

    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '6007220000000003',
            '6007220000000002',
        ]);
    }
}
