<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>