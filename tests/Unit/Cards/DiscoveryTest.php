<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\Discovery;

class DiscoveryTest extends BaseCardTests
{
    public $instance = Discovery::class;

    public function validNumbers(): Collection
    {
        return collect([
            '6011111111111117',
            '6011000990139424',
            '6221260421207440',
            '6221265873864226',
            '6448536738188267',
            '6455241183421681',
            '6464343604356204',
            '6477162522341410',
            '6484630861382840',
            '6492344734328440',
        ]);
    }

    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '6011111',
            '601111111111111',
            '60110009901394241',
        ]);
    }

    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '6011111111111118',
            '6011000990139423',
        ]);
    }
}
