<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>