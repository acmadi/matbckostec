<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>