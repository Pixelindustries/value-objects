<?php

namespace spec\Pixelindustries\ValueObjects\Formatters;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SHA512Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Formatters\SHA512');
    }
}
