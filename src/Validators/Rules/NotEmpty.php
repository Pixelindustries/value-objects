<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class NotEmpty extends BaseRule 
{
  
  public function validate($value) {
    return !empty($value);
  }
}
