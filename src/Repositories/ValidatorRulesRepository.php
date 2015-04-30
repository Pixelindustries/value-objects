<?php namespace Pixelindustries\ValueObjects\Repositories;

use Pixelindustries\ValueObjects\Base\StaticCallableTrait;

class ValidatorRulesRepository {

  use StaticCallableTrait;

  public function get($className, $scope = null) {
    $className = explode('\\', $className);
    $className = ucfirst(end($className));
    $className = "Pixelindustries\\ValueObjects\\Validators\\Rules\\{$className}";

    if (!is_null($scope)) {
      $className .= "\\{$scope}";
    }

    return new $className;
  }
}