<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class IPv4 implements Contracts\ValidatorRuleInterface
{
  public function validate($value) {
    return (boolean) filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
  }
}
