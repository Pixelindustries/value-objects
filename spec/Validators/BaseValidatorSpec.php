<?php

namespace spec\Pixelindustries\ValueObjects\Validators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

abstract class BaseValidatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
      $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\BaseValidator');
    }

    function it_implements_correct_interface() {
      $this->shouldImplement('Pixelindustries\ValueObjects\Contracts\ValidatorInterface');
    }

    function it_runs_through_rules_during_validate() {
      $this->validate('foo');

      foreach($this->getRules() as $rule) {
        $rule->validate('foo')->shouldHaveBeenCalled();
      }
    }
}
