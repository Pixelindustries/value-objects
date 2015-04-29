<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

use Pixelindustries\ValueObjects\Contracts;

class Email implements Contracts\ValidatorRuleInterface
{

    public function validate($value)
    {
        return (boolean) filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
