<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class String extends BaseRule
{
  public function validate($value) {
    return is_string($value);
  }
}
