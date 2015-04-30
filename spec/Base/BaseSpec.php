<?php

namespace spec\Pixelindustries\ValueObjects\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

abstract class BaseSpec extends ObjectBehavior {

  function let()
  {
      $this->beConstructedWith(null);
  }

  function it_implements_correct_parent_interface()
  {
    $this->shouldImplement('Pixelindustries\ValueObjects\Contracts\BaseInterface');
  }

  function it_runs_through_validators_during_is_valid()
  {
    $this->isValid();

    foreach($this->getValidators() as $validator) {
      $validator->validate($this->value)->shouldHaveBeenCalled();
    }
  }
}