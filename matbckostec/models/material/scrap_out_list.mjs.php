<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICANCmYAAHVuY3Rpb24gc2V0ZGcoKXsAAA0KCSQoJyNkZycpLmRhdGEAQGdyaWQoeyAgCQGQCXRpdGxlCAI6IiIsANF3aWR0aDo3MzYA4mgAIGVpZ2h0OjQxNSwCs29vbGJhBCByOiIjdACgQ2FyaQNjZml0Q28AEGx1bW5zOiJ0cnVlAWNyb3duBTB1bWJlcgFqYwKUW1sIAAViCXtmaQAAZWxkOidtYXRvdXRfbm8nLIAQCVMnTU9CIE5vLicsCYMxMDB9dHEsCnEDPQ1QZQNaRGF0ARADbwaTcmVmBmkIglJlZi4GfwoJCQZ2bm90ZXMGFk7tkADjBe8F42EX0gLmQQD0AvM2MAwTCWZvcoICDwB0ZXI6Zhr0KHZhbHVlLBNwLAYAaW5kZXgbgghQCXZhciBkZXQgAQA9ICc8YSBoC+A9IiMiIG9uYwEAbGljaz0idwLwb3cub3BlbigiAFwnILBhcF8UkXBkZi5waHA/TgEAbU1lbnU9TRFAcmlhbCBPdXQDBSBCb29rJggQAoFpZD0nKwdwLgEGAAArJ1wnLCBcJ19ibGFua1wnAAApOyI+PGltZyBzcmM9Ijw/gAAFYCBlY2hvICRiYXNlZGlyIAABPz50aGVtZXMvaWNvbnMvB7IggG5nA2AvYT4nOxtCCQlyZXR1clmQbgzBOw2BH+MJfQHiAGJdXRHidXJsOtAVDsAGfzsGgG1vZGVscy8KwGUM4S8PB8ABLXEPEnJlcT1tZW51JnBpbGMqYIRADfAkKCIjAOQiKS4WoCgpKycmdDwReHQCCADkAgUIsnZpZXc6CyFhaWwAwUFlLDYRCQlkZXQBEEYcTxiwZXgcQSk2AMAIDZIPVCc8ZGl2IHN0eWw7gHBhZACBZGluZzoycHgSMHRhYmxlIBhgAGoiZGR2LScgKyAEYgCAJwHgLwHyPjoAPC8EABSwCAN9CIRvbkV4cGFuZFJ+6m8KYCSWA/IIWj/yBdErAcJAewpyCRdRJx2/cqQyF09sF09wPxdBbGlzdCVfPWNpZAs0CXQBCUL4QuEBhnMRMGxlU2VsZWN0OgGq4A8p0ES1AYpsb2FkTXNnOicq4E+QJVFLRAzgJ2F1dESAEuMJCUdpDvM9xktkQmFyDGxhbmcyOyYykC4gQyZwR4U4R3AEpQkvQfkvSwVQYXJ0TgZQStQA8UR5A2IG3E5tBt0PiERlc2MGhU4CXDIMoQomcXR5CcZRdWF4AW4HAAEQRQMDMCxhbGlnbjoncmla0HDmJzSCA/AKd3ByaWNQ0ANgXoAnUADjA+Z94BoNlTfAALVvblJlc2l6ZUm3LOYJZK8oBqwnZml4RDESKHBIY0InTDQ7BTUrFQkJEBxvbkwbYFN1Y2Nlc3MGLwuwa3BUaS8gbWVJsCgtNggYCC8IL2h0CC4JfSwwKc/8CQci830pScMyAnH6DV8FNx1RFoED4gCQdzlob0z/dxYwbnR3c0c0PSRH/weRRyQB8gDER+UB8V0htpk5cChdSDYxX1XiXZ8gXZUgTDiRB8UnKwCk9gBPGgb0EAEMIjw9UYWgPgk="));  ?>