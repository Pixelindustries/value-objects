<?php namespace Pixelindustries\ValueObjects\Validators\Rules;

use IBAN\Validation\IBANValidator;

class IBAN extends BaseRule {

  public function validate($value) {
    return (new IBANValidator)->validate($value);
  }
}