<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation {
  // check for alpha and space
  function alpha_space($str) {
    return ( ! preg_match("/^([a-z ])+$/i", $str)) ? FALSE : TRUE;
  }
}