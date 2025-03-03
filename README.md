# Laravel Validator Rules - Credit Card (King Beto Fork)

## About this fork

This fork adds Tarjeta Naranja to the list of credit cards validators.

Check the original package here: <https://github.com/laravel-validation-rules/credit-card>

## Introduction

This rule will validate that a given credit card **number**, **expiration date** or **cvc** is valid.

## Installation

```bash
composer require kingbeto/credit-card
```

## Usage
### As FormRequest
```php
<?php

namespace App\Http\Requests;

use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;
use Illuminate\Foundation\Http\FormRequest;

class CreditCardRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'card_number' => ['required', new CardNumber],
            'expiration_year' => ['required', new CardExpirationYear($this->get('expiration_month'))],
            'expiration_month' => ['required', new CardExpirationMonth($this->get('expiration_year'))],
            'cvc' => ['required', new CardCvc($this->get('card_number'))]
        ];
    }
}
```

### Card number
#### From request
```php
$request->validate(
    ['card_number' => '37873449367100'],
    ['card_number' => new LVR\CreditCard\CardNumber]
);
```
#### Directly
```php
(new LVR\CreditCard\Cards\Visa)
    ->setCardNumber('4012888888881881')
    ->isValidCardNumber()
```


### Card expiration
#### From request
```php
// CardExpirationYear requires card expiration month
$request->validate(
    ['expiration_year' => '2017'],
    ['expiration_year' => ['required', new LVR\CreditCard\CardExpirationYear($request->get('expiration_month'))]]
);

// CardExpirationMonth requires card expiration year
$request->validate(
    ['expiration_month' => '11'],
    ['expiration_month' => ['required', new LVR\CreditCard\CardExpirationMonth($request->get('expiration_year'))]]
);

// CardExpirationDate requires date format
$request->validate(
    ['expiration_date' => '02-18'],
    ['expiration_date' => ['required', new LVR\CreditCard\CardExpirationDate('my')]]
);
```
#### Directly
```php
LVR\CreditCard\Cards\ExpirationDateValidator(
    $expiration_year,
    $expiration_month
)->isValid();

// Or static
LVR\CreditCard\Cards\ExpirationDateValidator::validate(
    $expiration_year,
    $expiration_month
);
```


### Card CVC
#### From request
```php
// CardCvc requires card number to determine allowed cvc length
$request->validate(
    ['cvc' => '123'],
    ['cvc' => new LVR\CreditCard\CardCvc($request->get('card_number'))]
);

```
#### Directly
```php
LVR\CreditCard\Cards\Card::isValidCvcLength($cvc);
```


### License
This project is licensed under an Apache 2.0 license which you can find
[in this LICENSE](https://github.com/kingbeto/credit-card/blob/master/LICENSE).


### Feedback
If you have any feedback, comments or suggestions, please feel free to open an
issue within this repository!
