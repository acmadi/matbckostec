<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>