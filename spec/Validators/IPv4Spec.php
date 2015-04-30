<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use Prophecy\Argument;

class IPv4Spec extends BaseValidatorSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\IPv4');
    }
}
