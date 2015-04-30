<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class NumericSpec extends BaseRuleSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\Numeric');
    }

    function it_should_validate_with_numeric_value() {
      $this->validate(123)->shouldReturn(true);
      $this->validate('123')->shouldReturn(true);
      $this->validate(0xaf323)->shouldReturn(true);
    }

    function it_should_not_validate_with_non_numerical_values() {
      $this->validate('foo')->shouldReturn(false);
      $this->validate('faz2134dakslmz')->shouldReturn(false);
      $this->validate(true)->shouldReturn(false);
    }
}
