<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>