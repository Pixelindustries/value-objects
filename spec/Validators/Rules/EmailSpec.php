<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class EmailSpec extends BaseRuleSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\Email');
    }

    function it_should_validate_with_valid_email() {
      $this->validate('foo@baz.org')->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_email() {
      $this->validate('not a valid email')->shouldReturn(false);
    }
}
