<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class SHA512 extends BaseRule 
{

  public function validate($value) {
    return (boolean) preg_match('#[a-f0-9]{128}#i', $value);
  }
}
