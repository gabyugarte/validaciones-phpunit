<?php

namespace App;

class Validate
{
     public static function email($value)
     {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
     }
     //Método para validar url
     public static function url($value)
     {
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
     }
     //Método para validar password
     public static function password($value)
     {
      return (bool) preg_match('/^[a-z]{6,9}$/', $value);     }
}
     
