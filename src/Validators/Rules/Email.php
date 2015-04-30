<?php

namespace Pixelindustries\ValueObjects\Validators\Rules;

class Email extends BaseRule
{

    public function validate($value)
    {
        return (boolean) filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
