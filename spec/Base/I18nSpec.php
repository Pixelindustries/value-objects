<?php

namespace spec\Pixelindustries\ValueObjects\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

abstract class I18nSpec extends ObjectBehavior {

  function let() {
    $this->beConstructedWith(null, 'nl');
  }

  function it_implements_correct_parent_interface() {
    $this->shouldImplement('Pixelindustries\ValueObjects\Contracts\BaseI18nInterface');
  }

  function it_should_throw_exception_with_empty_locale() {
    $this->shouldThrow('Pixelindustries\ValueObjects\Exceptions\InvalidLocaleException')->during__Construct(null, null);
  }
  
  function it_runs_through_validators_during_is_valid()
  {
    $this->isValid();

    foreach($this->getValidators() as $validator) {
      $validator->validate($this->value, $this->locale)->shouldHaveBeenCalled();
    }
  }
}