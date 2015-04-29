<?php namespace Pixelindustries\ValueObjects\Base;

use Pixelindustries\ValueObjects\Exceptions;
use Pixelindustries\ValueObjects\Repositories;
use Pixelindustries\ValueObjects\Contracts\BaseI18nInterface;

abstract class I18n implements BaseI18nInterface {

  protected $value;
  protected $locale;

  protected static $validators;
  protected static $validatorNames = [];

  public function __construct($value, $locale) {
    $this->value  = $value;

    if (empty($locale)) {
      throw new Exceptions\InvalidLocaleException;
    }

    $this->locale = trim(strtoupper($locale));
    self::$validators = new Repositories\ValidatorsRepository;
  }

  public function jsonSerialize() {
    return $this->value;
  }

  public function isValid() {
    return $this->runThroughValidators();
  }

  protected function runThroughValidators() {
    foreach(static::$validatorNames as $validatorClassName) {
      if (!self::$validators->get($validatorClassName, $this->locale)->validate($this->value)) return false;
    }

    return true;
  }
}