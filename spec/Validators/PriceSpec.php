<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use Prophecy\Argument;

class PriceSpec extends BaseValidatorSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Price');
    }
}
