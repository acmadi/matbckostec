<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>