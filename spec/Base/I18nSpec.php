<?php

namespace spec\Pixelindustries\ValueObjects\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

abstract class I18nSpec extends ObjectBehavior {

  function let() {
    $this->beConstructedWith(null, 'nl');
  }

  function it_extends_correct_parent_class() {
    $this->shouldImplement('Pixelindustries\ValueObjects\Contracts\BaseI18nInterface');
  }

  function it_should_throw_exception_with_empty_locale() {
     $this->shouldThrow('Pixelindustries\ValueObjects\Exceptions\InvalidLocaleException')->during__Construct(null, null);
  }
}