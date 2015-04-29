<?php

namespace spec\Pixelindustries\ValueObjects\Base;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

abstract class BaseSpec extends ObjectBehavior {

  function let()
  {
      $this->beConstructedWith(null);
  }

  function it_extends_correct_parent_class()
  {
    $this->shouldImplement('Pixelindustries\ValueObjects\Contracts\BaseInterface');
  }
}