<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class IPv6 extends BaseRule
{

    public function validate($value) {
    return (boolean) filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
  }
}
