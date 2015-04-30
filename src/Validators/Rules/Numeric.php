<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class Numeric extends BaseRule 
{
  public function validate($value) {
    return is_numeric($value);
  }
}
