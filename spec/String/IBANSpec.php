<?php

namespace spec\Pixelindustries\ValueObjects\String;

use Prophecy\Argument;
use spec\Pixelindustries\ValueObjects\Base\BaseSpec;

class IBANSpec extends BaseSpec
{
  function it_is_initializable()
  {
    $this->shouldHaveType('Pixelindustries\ValueObjects\String\IBAN');
  }
}
