<?php

namespace spec\Pixelindustries\ValueObjects\String;

use Prophecy\Argument;
use spec\Pixelindustries\ValueObjects\Base\I18nSpec;

class IBANSpec extends I18nSpec
{
  function it_is_initializable()
  {
    $this->shouldHaveType('Pixelindustries\ValueObjects\String\IBAN');
  }

  function it_should_be_valid_with_nl_iban() {
    $this->beConstructedWith('NL91ABNA0417164300', 'nl');

    $this->isValid()->shouldReturn(true);
  }

  function it_should_be_invalid_with_non_nl_iban() {
    $this->beConstructedWith('HU12123412341234123412341234', 'nl');

    $this->isValid()->shouldReturn(false); 
  }

  function it_should_be_invalid_with_invalid_iban() {
    $this->beConstructedWith('this is not an iban', 'nl');

    $this->isValid()->shouldReturn(false);
  }
}
