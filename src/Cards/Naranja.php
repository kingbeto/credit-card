<?php

namespace LVR\CreditCard\Cards;

use LVR\CreditCard\Contracts\CreditCard;

class Naranja extends Card implements CreditCard
{
    /**
     * Regular expression for card number recognition.
     *
     * @var string
     */
    public static $pattern = '/^(589562|402917|402918|527571|527572)/';

    /**
     * Credit card type.
     *
     * @var string
     */
    protected $type = 'credit';

    /**
     * Credit card name.
     *
     * @var string
     */
    protected $name = 'naranja';

    /**
     * Brand name.
     *
     * @var string
     */
    protected $brand = 'Tarjeta Naranja';

    /**
     * Card number length's.
     *
     * @var array
     */
    protected $number_length = [16];

    /**
     * CVC code length's.
     *
     * @var array
     */
    protected $cvc_length = [3];

    /**
     * Test cvc code checksum against Luhn algorithm.
     *
     * @var bool
     */
    protected $checksum_test = true;


    /**
     * @return bool
     */
    protected function checksumTest()
    {
        // The Luhn Algorithm. It's so pretty.
        $nCheck = 0;
        $bEven = false;
        $value = preg_replace('/\D/', '', $this->card_number);
        for ($n = strlen($value) - 1; $n >= 0; $n--) {
            $cDigit = $value[$n];
            $nDigit = intval($cDigit);
            if ($bEven && ($nDigit *= 2) > 9) {
                $nDigit -= 9;
            }
            $nCheck += $nDigit;
            $bEven = !$bEven;
        }
        return $nCheck % 10 == 0;
    }
}
