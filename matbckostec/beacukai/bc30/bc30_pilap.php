<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>