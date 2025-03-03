<?php

namespace LVR\CreditCard\Tests\Unit\Cards;

use Illuminate\Support\Collection;
use LVR\CreditCard\Cards\DinersClub;

class DinersClubTest extends BaseCardTests
{
    public $instance = DinersClub::class;

    public function validNumbers(): Collection
    {
        return collect([
            '38790546741937',
            '38222940456326',
            '30013425411771',
            '36138858636158',
            '30344187702499',
            '30134903513019',
            '30182600831036',
            '30174614385828',
            '30280689508598',
            '36446985630329',
            '38378773006495',
            '30181036023143',
            '30310636040708',
            '30045564908811',
            '30360914863404',
            '30208973022554',
            '30375947287447',
            '36316702373604',
            '30198656820376',
            '30001733808861',
            '30015028970913',
            '30153356302449',
            '30320689240238',
            '30147986570219',
            '38893498602634',
            '30179463446670',
            '30162699797827',
            '36227757217325',
            '38256376852905',
            '36055777287055',
            '36755520879112',
            '36909931973390',
            '30125797171344',
            '30172162676481',
            '30092108379679',
            '38512091997007',
            '30095612829386',
            '30335636218988',
            '30202382641492',
            '38763708280614',
            '30177358246072',
            '30222985778483',
            '38057488587656',
            '30025515526490',
            '30225928901237',
            '30230133872470',
            '36229365856015',
            '36363811610153',
            '30350055292083',
            '30079242677274',
            '30151746275572',
            '36506990305066',
            '36975152158730',
            '38765432739526',
            '30008319658115',
            '36013706113603',
            '30058729925463',
            '30106377344279',
            '30078786567784',
            '30278456417274',
            '36501414470901',
            '30171016912514',
            '38126658758445',
            '30227061614304',
            '30015417611680',
            '30030546723546',
            '30276696730126',
            '30121835140813',
            '30332154894357',
            '30022996511869',
            '30389478563399',
            '36884349480744',
            '30363129898769',
            '30250352998798',
            '30109554012834',
            '30153508815504',
            '36158002091001',
            '30082685831754',
            '30056149294064',
            '30126700356980',
            '36943208024686',
            '30343624704670',
            '30288744272217',
            '30085144535809',
            '30069253537939',
            '30327998984513',
            '38330985748885',
            '30187369901391',
            '36831116285541',
            '30359005922665',
            '30041471423267',
            '36682345780210',
            '30085603315602',
            '36125138511814',
            '30261570501330',
            '30278776365005',
            '30324306195536',
            '30042294360918',
            '30365910478776',
            '36695601420305',
        ]);
    }

    public function numbersWithInvalidLength(): Collection
    {
        return collect([
            '3056930',
            '367001020000001',
            '3614890064791',
        ]);
    }

    public function numbersWithInvalidCheckSum(): Collection
    {
        return collect([
            '30569309025903',
            '38520000023234',
            '36700102000001',
        ]);
    }
}
