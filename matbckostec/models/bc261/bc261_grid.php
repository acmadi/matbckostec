<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwCAbmNlICIuLi8AMG1vZGVscy8AkGFic3BhdGguAoAiOwKtcGRvYyIAb24BxQ0KJASQID0gJF9SRVFVBIdFU1RbIgEQIl0DgCRDQVIBqwEQAaMAEG1hdG91dGRvX2lkAiAiUk1PAgQtMDAwMTMG8Q0KaWYgKAVxPT0AECdkZycpew0KCSRxAoFTRUxFAABDVCAqLERBVEVfRk9STUFUAAAoRG9rVGcsJyVkLyVtLyVZAgAnKSBBUyABUkRteSBGUk9NIADAZG9rdW1lbiAF8QSxLj0gIldIEABFUkUCgUtkQmM9JzQnIEFORAIAIENBUj0nC5EnIE9SREVSIEIAElkgbm8iOwkNCn0gEcBlIAnaMpA+Ce8gKgdDYmFyYW5nBz8HPwc/BzIHLz1HBicTUGhkcgdfETwV819kYXRlEZ0BuSABzWEubm90ZXMTEQCSFpAJIAvzAoBfBuMQACBhIAGDTEVGVCBKT0lOIHBwBAFpY193bwiwIGIgT04gYi53HLExiD1hAIMC80lOThQAAwJtc3QE0V90eQn8cGUgYwMhYy4GEAYAATIDgADoBuQaA0tkHw5KbnMc0BoSG/kZ5gOkbm8sIAC0D3ENMEPjPwLxG18HUGRldBQwHTAJJAM0KHIsOAF2KvIjMfBiIyAn5CMAHbIsIE5tQgCiBtAgVXIAwyxA/iApdHF0eSwgMijSALARMyjSBcAQ0QhQIH//YQFzFZcSkSOUFZIGxS/QA3EKcAMjEdMBMAzgNEArMLAPAMYnFAQSFmNoaWxkX25vCmARMA9gEU8fAWRnMxEQBbA2eyCjCQNrZW1iYWxpLQ93CCAZ4ApwND9SNDwtDz3xQ2FyaQfEZHRk+AcA0A6wGJgBQxhkZHRzYW1wYWkCPQFjAlTBiEKbDUAJQ09OQ0KAFmEoYS4+ICwzKQA2LCcuJyxSSUdIVAE2GrJGAfEDXU4PzW9EYWYDWwE1A1MA4wNxSZlUZwNxSZxGAWLA8AKxINJoZWFkZXI2NAohNhM1oHBlbmeDN0QQa3V0YW42ZRa1YS4ApEtCYg1BNEALsNB9BYEEanRIUHNha3NpN3UDlALwAKQEMmMEO/ggJfMGZjfRBaE1EQlpZigkGWMgIT0gJwc+JyAmJiABEBhDATMpOgLhJMBWgVVhD0IgAABCRVRXRUVOICciLmRteXMyEfB5bWQEtSkuIlgDAcwFYwHiB9JlbmRpfCBmZbA5IQXRLlYdgiBERVMuMwkkcnVuIAI9JGrALT5xdWVyeSgkcSlcUg1wgAprMQHfBVAkcnM9A4EtPmZldGNoAABBbGwoUERPOjpGRVRDSF9BBABTU09DKQJwZWNobyBqc29uXxoAZW5jcxBqsHMBgT8+"));  ?>