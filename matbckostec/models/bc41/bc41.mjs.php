<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>