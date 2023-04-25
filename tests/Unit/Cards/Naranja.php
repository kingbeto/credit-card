<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\Mastercard;

class MastercardTest extends BaseCardTests
{
    public $instance = Mastercard::class;

    public function validNumbers(): Collection
    {
        return collect([
            '5895638247361984',
            '5895123456789012',
            '5895987654321098',
            '4029170056789012',
            '4029180090123456',
            '5275720987654321',
            '5275710123456789',
        ]);
    }

    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '4029180',
            '402918009012345',
            '40291800901234562',
        ]);
    }

    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '4029180090123451',
            '5895638247361985',
            '4029170056789010',
            '5275710123456788',
        ]);
    }
}
