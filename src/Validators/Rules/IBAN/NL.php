<?php namespace Pixelindustries\ValueObjects\Validators\Rules\IBAN;

use Pixelindustries\ValueObjects\Contracts;

class NL implements Contracts\ValidatorRuleInterface {

  public function validate($value) {
    return (boolean) preg_match('#^NL[0-9]{2}[a-z]{4}[0-9]{10}$#i', preg_replace('#\s+#', '', $value));
  }
}