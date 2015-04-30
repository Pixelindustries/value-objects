<?php

namespace spec\Pixelindustries\ValueObjects\Validators\Rules;

class SHA256Spec extends BaseRuleSpec
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pixelindustries\ValueObjects\Validators\Rules\SHA256');
    }

    function it_should_validate_with_valid_sha256() {
      $this->validate(md5('foo') . md5('bar'))->shouldReturn(true);
    }

    function it_should_not_validate_with_invalid_sha256() {
      $this->validate('not a sha256')->shouldReturn(false);
    }
}
