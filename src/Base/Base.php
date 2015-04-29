<?php namespace Pixelindustries\ValueObjects\Base;

use Pixelindustries\ValueObjects\Contracts;
use Pixelindustries\ValueObjects\Repositories;

abstract class Base implements Contracts\BaseInterface {

  protected $value;

  protected static $validators;
  protected static $validatorNames = [];

  public function __construct($value) {
    $this->value = $value;

    self::$validators = new Repositories\ValidatorsRepository;
  }

  public function isValid() {
    return $this->runThroughValidators();
  }

  protected function runThroughValidators() {
    foreach(static::$validators as $validatorClassName) {
      if (!self::$validators->get($validatorClassName)->validate($this->value)) return false;
    }

    return true;
  }

  public function jsonSerialize() {
    return $this->value;
  }
}