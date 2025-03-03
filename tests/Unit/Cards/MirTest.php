<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\Mir;

class MirTest extends BaseCardTests
{
    public $instance = Mir::class;

    public function validNumbers(): Collection
    {
        return collect([
            '2200654321000000',
            '2200420152000000',
        ]);
    }

    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '2200',
            '220065',
            '220065432',
            '220065432100000',
        ]);
    }

    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '2200123456789010',
            '2200010400000000',
        ]);
    }
}
