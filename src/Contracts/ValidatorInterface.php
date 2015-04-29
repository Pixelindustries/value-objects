<?php namespace Pixelindustries\ValueObjects\Contracts;

interface ValidatorInterface {

  public function __construct($scope = null);

  public function validate($value);

  public function setScope($scope);

  public function getScope();
}