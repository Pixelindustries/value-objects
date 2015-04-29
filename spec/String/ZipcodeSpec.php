<?php

namespace spec\Pixelindustries\ValueObjects\String;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZipcodeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\String\Zipcode');
    }
}
