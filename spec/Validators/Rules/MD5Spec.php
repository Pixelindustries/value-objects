<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class MD5Spec extends BaseRuleSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\MD5');
    }

    function it_should_validate_with_valid_md5() {
      $this->validate(md5('foo'))->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_md5() {
      $this->validate('not an md5')->shouldReturn(false);
    }
}
