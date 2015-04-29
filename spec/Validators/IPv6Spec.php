<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IPv6Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\IPv6');
    }
}
