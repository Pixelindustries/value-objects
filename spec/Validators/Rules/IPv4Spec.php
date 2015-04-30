<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class IPv4Spec extends BaseRuleSpec
{
    function it_is_initializable()
    {
      $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\IPv4');
    }

    function it_should_validate_with_valid_ipv4() {
      $this->validate('192.168.1.1')->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_ipv4() {
      $this->validate('not a valid ipv4')->shouldReturn(false);
    }
}
