<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>