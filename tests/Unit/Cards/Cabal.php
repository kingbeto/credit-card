<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\Mastercard;

class MastercardTest extends BaseCardTests
{
    public $instance = Mastercard::class;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function validNumbers(): Collection
    {
        return collect([
            '5121647321685225',
            '5122174301617622',
            '5127175625251274',
            '5137481033376283',
            '5177437335456778',
            '5218416266166136',
            '5221225025781753',
            '5288773846741167',
            '5289000128841542',
            '5314501768582022',
        ]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '512164',
            '512164732168522',
            '51271756252512751',
        ]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '5121647321685222',
            '5122174301617623',
            '5127175625251275',
            '5137481033376284',
        ]);
    }
}
