<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class SHA1Spec extends BaseRuleSpec
{
    function it_is_initializable()
    {
      $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\SHA1');
    }

    function it_should_validate_with_sha1() {
      $this->validate(sha1('foo'))->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_sha1() {
      $this->validate('not a sha 1')->shouldReturn(false); 
    }
}
