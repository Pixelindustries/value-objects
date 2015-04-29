<?php namespace Pixelindustries\ValueObjects\Repositories;

use Pixelindustries\ValueObjects\Exceptions;
use Pixelindustries\ValueObjects\Base\StaticCallableTrait;

class ValidatorsRepository {

  use StaticCallableTrait;

  public function get($className, $scope = null) {
    $className = explode('\\', $className);
    $className = end($className);
    $className = "Pixelindustries\\ValueObjects\\Validators\\{$className}";

    if (!class_exists($className)) {
      throw new Exceptions\ValidatorNotFoundException("Validator class '{$className}'' not found.");
    }

    return new $className($scope);
  }
}