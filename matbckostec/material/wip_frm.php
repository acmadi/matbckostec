<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>