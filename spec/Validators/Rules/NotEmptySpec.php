<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NotEmptySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\NotEmpty');
    }
}
