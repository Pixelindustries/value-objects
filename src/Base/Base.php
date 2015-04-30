<?php namespace Pixelindustries\ValueObjects\Base;

use Pixelindustries\ValueObjects\Contracts;
use Pixelindustries\ValueObjects\Exceptions;
use Pixelindustries\ValueObjects\Repositories;

abstract class Base implements Contracts\BaseInterface {

  protected $value;

  protected static $validators;
  protected static $validatorNames = [];

  public function __construct($value) {
    if (empty(static::$validatorNames)) {
      throw new Exceptions\NoValidatorsException;
    }

    $this->value = $value;

    self::$validators = new Repositories\ValidatorsRepository;
  }

  public function isValid() {
    return $this->runThroughValidators();
  }

  protected function runThroughValidators() {
    $valid = true;

    foreach(static::$validatorNames as $validatorClassName) {
      if (!self::$validators->get($validatorClassName)->validate($this->value)) $valid = false;
    }

    return $valid;
  }

  public function jsonSerialize() {
    return $this->value;
  }

  public function getValidators() {
    $validators = [];

    foreach(static::$validatorNames as $validatorClassName) {
      $validators[] = self::$validators->get($validatorClassName);
    }

    return $validators;
  }
}