<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>