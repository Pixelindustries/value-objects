<?php

namespace spec\Pixelindustries\ValueObjects\String;

use Prophecy\Argument;
use spec\Pixelindustries\ValueObjects\Base\BaseSpec;

class EmailSpec extends BaseSpec
{
    function it_is_initializable()
    {
      $this->shouldHaveType('Pixelindustries\ValueObjects\String\Email');
    }

    function it_should_be_valid_with_email_address() {
      $this->beConstructedWith('foo@baz.org');
      
      $this->isValid()->shouldReturn(true);
    }

    function it_should_not_be_valid_with_invalid_email_address() {
      $this->beConstructedWith('this is not an email address');

      $this->isValid()->shouldReturn(false);
    }
}
