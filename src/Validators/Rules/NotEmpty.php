<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class NotEmpty implements Contracts\ValidatorRuleInterface 
{
  
  public function validate($value) {
    return !empty($value);
  }
}
