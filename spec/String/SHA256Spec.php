<?php

namespace spec\Pixelindustries\ValueObjects\String;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SHA256Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\String\SHA256');
    }
}
