<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>