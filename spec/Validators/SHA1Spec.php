<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use Prophecy\Argument;

class SHA1Spec extends BaseValidatorSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\SHA1');
    }
}
