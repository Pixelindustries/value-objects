<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class SHA512Spec extends BaseRuleSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\SHA512');
    }

    function it_should_validate_with_valid_sha512() {
      $this->validate(md5('foo') . md5('bar') . md5('foo') . md5('bar'))->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_sha512() {
      $this->validate('not a sha512')->shouldReturn(false);
    }
}
