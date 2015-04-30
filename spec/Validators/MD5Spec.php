<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use Prophecy\Argument;

class MD5Spec extends BaseValidatorSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\MD5');
    }
}
