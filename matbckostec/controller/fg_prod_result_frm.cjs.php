<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>