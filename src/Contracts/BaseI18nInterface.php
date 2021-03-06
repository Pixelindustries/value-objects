<?php namespace Pixelindustries\ValueObjects\Contracts;

use JsonSerializable;

interface BaseI18nInterface extends JsonSerializable {

  /**
   * Constructor method
   * @param mixed $value
   */
  public function __construct($value, $locale);

  /**
   * JsonSerialize
   *
   * Returns the serialized representation of the current value object.
   * The return value should be something you'd use in the constructor
   * of a value object, so as lossless as possible.
   * 
   * @return mixed
   */
  public function jsonSerialize();

  /**
   * isValid
   *
   * Passes the value to a validator and checks the validity
   * of the current value.
   * 
   * @return boolean [description]
   */
  public function isValid();

  /**
   * Returns an array of validators
   * @return array [description]
   */
  public function getValidators();
}