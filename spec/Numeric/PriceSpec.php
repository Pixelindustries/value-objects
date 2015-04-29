<?php

namespace spec\Pixelindustries\ValueObjects\Numeric;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PriceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Numeric\Price');
    }
}
