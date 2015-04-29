<?php namespace Pixelindustries\ValueObjects\Base;

trait StaticCallableTrait {
  public static function __callStatic($methodName, $arguments) {
    $instance = new static;

    return call_user_func_array([$instance, $methodName], $arguments);
  }
}