<?php namespace Pixelindustries\ValueObjects\Validators;

use Pixelindustries\ValueObjects\Contracts;
use Pixelindustries\ValueObjects\Repositories;
use Pixelindustries\ValueObjects\Contracts\ValidatorInterface;

abstract class BaseValidator implements ValidatorInterface {

  protected $scope;

  protected static $formatters;
  protected static $formatterName;

  protected static $rules;
  protected static $ruleNames = [];

  public function __construct($scope = null) {
    $this->scope = $scope;

    self::$rules = new Repositories\ValidatorRulesRepository;
  }

  public function getScope() {
    return $this->scope;
  }

  public function setScope($scope) {
    $this->scope = $scope;
  }

  public function validate($value) {
    return $this->runThroughValidatorRules($value);
  }

  public function getRules() {
    $rules = [];

    foreach(static::$ruleNames as $ruleClassName) {
      $rules[] = self::$rules->get($ruleClassName, $this->scope);
    }

    return $rules;
  }

  protected function runThroughValidatorRules($value) {
    foreach(static::$ruleNames as $ruleClassName) {
      if (!self::$rules->get($ruleClassName, $this->scope)->validate($value)) return false;
    }

    return true;
  }
}