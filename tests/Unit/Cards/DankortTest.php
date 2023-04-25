<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\Dankort;

class DankortTest extends BaseCardTests
{
    public $instance = Dankort::class;

    public function validNumbers(): Collection
    {
        return collect([
            '5019717010103742',
        ]);
    }

    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '5019717',
            '50197170101037421',
            '501971701010374',
        ]);
    }

    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '5019717010103741',
        ]);
    }
}
