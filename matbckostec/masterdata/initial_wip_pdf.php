<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>