<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>