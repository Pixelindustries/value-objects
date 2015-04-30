<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class StringSpec extends BaseRuleSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\String');
    }

    function it_should_validate_with_string() {
      $this->validate('')->shouldReturn(true);
    }

    function it_should_not_validate_with_non_string() {
      $this->validate(null)->shouldReturn(false);
      $this->validate(0)->shouldReturn(false);
      $this->validate(true)->shouldReturn(false);
      $this->validate(false)->shouldReturn(false);
    }
}
