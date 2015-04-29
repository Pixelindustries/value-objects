<?php namespace Pixelindustries\ValueObjects\String;

use Pixelindustries\ValueObjects\Base;

class Email extends Base\Base {

 public function isValid() {
  return (filter_var($this->value, FILTER_VALIDATE_EMAIL) !== false);
 }  
}