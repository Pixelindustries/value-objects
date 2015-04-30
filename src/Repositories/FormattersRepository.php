<?php namespace Pixelindustries\ValueObjects\Repositories;

use Pixelindustries\ValueObjects\Base\StaticCallableTrait;

class FormattersRepository {

  use StaticCallableTrait;

  public function get($className, $scope = null) {
    $className = explode('\\', $className);
    $className = end($className);
    $className = "Pixelindustries\\ValueObjects\\Formatters\\{$className}";

    if (!is_null($scope)) {
      $className .= "\\{$scope}";
    } else {
      $className .= "\\{$className}";
    }

    return new $className;
  }
}