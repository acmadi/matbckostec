<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4NCiQoZnUACG5jdGlvbigpew0KCQEhJyNyAAhlZicpLmhpZGUoKTsBNl9pZIACAWBjb21ib2dyaWQoeyAgAyBwAABhbmVsV2lkdGg6NTAwLCAggAAEQAlpZEZpZWxkOidtYXRvdXxAdAOhAaAC4AgxAbtubycBs3VybDogJwAAPD9waHAgZWNobyAkYmFzZQAAZGlyID8+bW9kZWxzL2JjNFQRMQBSXwgRLgKgP3JlcT0GIGhkcgR0AAFmaXRDb2x1bW5zOnRydWUFw0jAYwEkW1sLQgl7Zgn6CEF0aXRsZToAACdPdXRnb2luZyBOby4nLHeGBQ2CNjB9LAvAA21kYXRlJywDjUQBYrCcA5M1A58KwF9uYW0DnyBUGkAHJQOdd29OQF8KSFdPCekCwAnQXV0KMW9uQ2xpYwQAa1JvdzodhmluZGV4LHJvdykAFXtzZXRkZzJVcmwoAPF9EMF9HhGpwB4zdx3gdwLgb3cdsAUwDaMiRk9STSCIABl4c3RyHUBwcGVyKCRObU1lbiWIdSkaICIsINAgABAPozc3MAkBaGVpAIRnaHQ6NTE1LCFxdG9wOgGCbGU4EGZ0AKABQRmwbGFwc2liF+BmYWxzQCRlA4FtaW5pbWl6YQFbYXgBWw0KyG8L4CcCDQoMNENhcmkMfwWwIgGhDHkLxAu/cR42LGAP4Au0MzY1CRFjbG8owCUjAdApAGFuOWwA4w9wCQxPAkEMTwoJbQxPDEEC8AkJGPEALSQoJyNidG5UYmgMYGMcwToZCQ7SKI5kcwIjKBuxCWVuAOBTaW0A4BTxAPJCMHt0bADxAQNJbnB1dADwBkAgAgC4MgDDB1GcAj8zc2gf0AVyAUFLZEJhcmFuZwiwYQCOdHRyKCJkaXMZMWQiLDWxAoEL0A13sQoQMALxCIBVC49FlAmCCnQJCZEMYkhwcwgzmHkJ0GVuCqUB8WVuVGcMUQGQBcEJ/ycjCf///gn/CkEViAgQDNAVjgZQC9AB0AjSDUIlAwFgFMADPymEA1LBbG9jYVOhLnJlbG9hZCgRSgQGwhQOMAQOICgpIAQhaWYgKA3hZlawZGVIEG4CgHZhD1AgIT0gJycCMwkkLm0AAGVzc2FnZXIuY29uZmlybSggACdDAJMnLCdBcmUgeW91IHN1iQAAlHdhbl7wbyBTAGV0ZSByZWNvBJxyZD8nLED2cilbgwkJB+EA4Q/gCQmBQAaAcG9zdCgiPqgkWB5ocHNfYmPYFleRPwB7H4ADkAlDQVI6IAx/KTOBAgBEIUNvaxqgYzogOQaTfQjHZGF0YRSyAnDABAgQDpZhbGVydCgnV2FybliwJyyp7gKCOwb0CRePdWUegQRRG8IAkH0GwQDQMxJ9XAAgY9BlFyIGbwZnJ1NpbGFoa2FuIAJIcGlsaWggB2EgeTAAIGEBUWRpIAHjaGFwdXMhJwbSBiAGAEeVdGwyO091Vf7vEcECECYAHiA2OwFwM0AyAYAgMHbjCQFABMAovQFg5/sCoAKQK+8KCQYqBKcBdAOABiEHpwTDBi8yAqQGP3iACglhAeEDUgcCZGxnQfZkaWFsb2cof/8nUnISAhHLMF8RxQiwAdAFYgM7EuMIrwiiAdADMgif1dwInxrhDY6QJ1WRQ2HyBW8UM3diURYwcGQnb2/LcDlRkCAJU6IB4QdyCqgtsFJFY2giwGVbCShQkiwDkFVyEoMoIgLVIiwiAVUiCfEFBy5lAAFhc3l1aS1udW1iZXJib3gI4AQJY3NzKCeTkS1hbGlnbo6AJ3J1cfADFoIeMTgQAnBtYXNrKCI5OTkuAEAFcoZ8AcFOb0RhnNEB72RzVwUsUXugNgAIkC8vECBBa2iXUERvY3VtZUTQUmVhZHkIAA0KPC+jYz4="));  ?>