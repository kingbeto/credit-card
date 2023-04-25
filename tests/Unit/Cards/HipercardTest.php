<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\Hipercard;

class HipercardTest extends BaseCardTests
{
    public $instance = Hipercard::class;

    public function validNumbers(): Collection
    {
        return collect([
            '6062826043427285',
            '6062820114738720',
            '6062820090765804',
        ]);
    }

    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '60628260434272857',
        ]);
    }

    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '5121647321685222',
        ]);
    }
}
