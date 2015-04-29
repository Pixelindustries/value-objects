<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SHA1Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\SHA1');
    }
}
