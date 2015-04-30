<?php namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

abstract class BaseRuleSpec extends ObjectBehavior {

  function it_implements_correct_interface() {
    $this->shouldImplement('Pixelindustries\ValueObjects\Contracts\ValidatorRuleInterface');
  }
}