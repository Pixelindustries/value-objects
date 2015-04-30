<?php

namespace spec\Pixelindustries\ValueObjects\Formatters\IBAN;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NLSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Formatters\IBAN\NL');
    }
}
