<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>