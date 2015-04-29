<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumericSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\Numeric');
    }
}
