<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class SHA256 extends BaseRule 
{

  public function validate($value) {
    return (boolean) preg_match('#[a-f0-9]{64}#i', $value);
  }
}
