<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>