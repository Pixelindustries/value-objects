<?php

namespace spec\Pixelindustries\ValueObjects\Repositories;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ValidatorsRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
      $this->shouldHaveType('Pixelindustries\ValueObjects\Repositories\ValidatorsRepository');
    }

    function it_should_return_valid_instance_of_validator() {
      $this->get('IBAN')->shouldReturnAnInstanceOf('Pixelindustries\ValueObjects\Validators\IBAN');
    }

    function it_should_throw_exception_when_validator_is_not_found() {
      $this->shouldThrow('Pixelindustries\ValueObjects\Exceptions\ValidatorNotFoundException')->duringGet('foo');
    }
}
