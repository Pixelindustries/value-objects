<?php

namespace spec\Pixelindustries\ValueObjects\String;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MD5Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\String\MD5');
    }
}
