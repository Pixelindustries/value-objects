<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IBANSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\IBAN');
    }

    function it_should_validate_with_valid_iban() {
      $this->validate('DE89370400440532013000')->shouldReturn(true);
      $this->validate('NL02ABNA0123456789')->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_iban() {
      $this->validate('foo')->shouldReturn(false);
    }
}
