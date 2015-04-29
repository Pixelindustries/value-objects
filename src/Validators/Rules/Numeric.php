<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class Numeric implements Contracts\ValidatorRuleInterface 
{
  public function validate($value) {
    return is_numeric($value);
  }
}
