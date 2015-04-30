<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class NotEmptySpec extends BaseRuleSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\NotEmpty');
    }

    function it_should_validate_with_non_empty_value() {
      $this->validate('not empty')->shouldReturn(true);
    }

    function it_should_not_validate_with_empty_values() {
      $this->validate('')->shouldReturn(false);
      $this->validate(false)->shouldReturn(false);
      $this->validate(null)->shouldReturn(false);
      $this->validate(0)->shouldReturn(false);
    }
}
