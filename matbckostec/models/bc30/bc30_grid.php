<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwCAbmNlICIuLi8AMG1vZGVscy8AkGFic3BhdGguAoAiOwKtcGRvYzAib24BzwRhZnVuY3RpAecNCiQGcCAABD0gJF9SRVFVRVNUWyIBECJdhwAFYCRDQVIBqwEQAaIvLyRtYXRvdQIAdGRvX2lkAkAiUk1PLTAwMDFAgDMI8Q0KaWYgKAWRPT0nZGcnKQIAew0KCSRxAoFTRUxFQ1QgKiwAAERBVEVfRk9STUFUKERva1QAAGcsJyVkLyVtLyVZJykgQVNAACABUkRteSBGUk9NIGRva3VtGAJlbiAF8QSxLj0gIldIRVJFAoFLAABkQmM9JzcnIEFORCBDQVI9QAEnC7EnIE9SREVSIEJZIG5vA4ElIH0gE7BlIAnKMgnfICoHM2JhcmFueINnBy8HLwcvByIJDQoHP2RvaGRyB18RLIYBFYBkYXRlEU0BdSBhLm5vdGVzEoHIRACSFgAJIAtzbWt0XwZSIGEgAXNMRQCBRlQgSk9JTiABwXNvcmRlcghQAE8gYiBPTiBiLnMcQT1hAIMO8ASQA4Dw6xrwFkEUNgewbm8sIABwCZEHkEMVP3Ee8SoQU/90HCB7D+AJJALwIgIl6AEyJGIcgRxwITQcUBcSBiQsIE5tQgCiBlAgVXIAwywgIsRhLgOCcXR5LCAyIkIAsQGGcHJpY2UBpUgB73JnU2VyYWgMoA0AJDIP0WQJ4RGfEZITU/xcEVQKYhFQAIIEUxR4c3RfIeRjFEELtS4QYS48FWZnMTEDPhlgF6NkZXQgZANhZBcjPRgkzsADIy1DYS4HgiyAAIInHJQY1mEuY2hpbA8AZF9ubxJAGJAWwCavZGdQZXRpS2Udf21hcycPLlUggHACYGsCYR/ACFAflAiTOFAN0KBgNd9SNdhOb1VydXQg7yDiZ0NhcmmPgAf0ZHRkANASUCDpAUIg9GR0c2FtcGF8GGkCPQFjAlREewsQCUNPTkNEYBoBKGEuAABDQVIsMyksJy4nLFJJR0hU2D8BNiMiRgHxA11Ob0RhZgNbATUDUwDjA3FLeTcfVGcDcUt8RgFiArEnUmhlYTbgJyQKITiUJCAAEGplbmlzZWtzcG9yOLVLZEpuPyBzRQEyJ8AA6CASA/cbYm5nSfBrdXRhbiW+IGYlAWYuGuVhAKVREmYRMQTwD6AJcQRscjXuZGEEgQRQZwRRZwO1AxAE9ARSZwRfDKMIsHSBb1KAc2Frc2kgMOJjBD8EMmMEPwQ2KEcxtNgrB8QIbGQEPwQ4bGFidWgMkGUMkWUIbwhifghlBDsucxMWZGESUSzhCWlmKCQrRCE9IANPJycgJiYgARAo4yABMik6AuEzNGfhH+IAACBCRVRXRUVOICciLmRteXMI+DJ5bWQEtSkuImqDAcwFYwHiB9JlbmQ8JGlmeFBSUViaLiIgREVTP4QNCnxBdW4gAj0kf4AtPnF1ZXJ5KCRxKQPAJAAAcnM9JHJ1bi0+ZmV0Y2hBbAAAbChQRE86OkZFVENIX0FTUyAAT0MCcWVjaG8ganNvbl9lbmPSAVIQe6BzAYEvLwGiJ1t7IklEIjp+SBA8LCJNaeByaWFsX0MDEAHAfHCAATAxQgAiAchOYW1lAcBKQUNLRVQgQ08IlFRUT04CAFNpegFxWEwAwEwFkWJsEEBhY2sA0ENvbG9yAxAxNSBEQVmERAEQVW5pdAEAUk9MAsFRdHkA0DUwUeIwAaBSAyE6IjgAsGI1AcAIZiAtIAdrfWd9LAxfDF9BVAxfDF8MWVMIEAxPCLAMTwxIMZKw2SQDkAxUNwCwDFgnLpXZLicMz10nHdA/Pg=="));  ?>