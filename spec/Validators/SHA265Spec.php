<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use Prophecy\Argument;

class SHA265Spec extends BaseValidatorSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\SHA265');
    }
}
