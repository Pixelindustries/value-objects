<?php

namespace spec\Pixelindustries\ValueObjects\Formatters;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BaseFormatterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Formatters\BaseFormatter');
    }
}
