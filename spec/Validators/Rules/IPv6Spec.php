<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IPv6Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\IPv6');
    }

    function it_should_validate_with_valid_ipv6() {
      $this->validate('3ffe:1900:4545:3:200:f8ff:fe21:67cf')->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_ipv6() {
      $this->validate('not a valid ipv6')->shouldReturn(false);
    }
}
