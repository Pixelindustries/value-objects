<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use Prophecy\Argument;

class SHA512Spec extends BaseValidatorSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\SHA512');
    }
}
