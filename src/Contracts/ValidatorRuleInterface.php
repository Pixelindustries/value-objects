<?php namespace Pixelindustries\ValueObjects\Contracts;

interface ValidatorRuleInterface {

  public function validate($value);
}