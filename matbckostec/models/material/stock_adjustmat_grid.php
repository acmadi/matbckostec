<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwAAbmNlICIuLi9hYnNwYXRoLpAwAeAiOwINcGRvY29uAc8DwWZ1bmMiAHRpAecNCiQF0CA9ICRfUkVRVQSBRVNUWyIBECJdBWANCmlmICgCAQAAPT0nbWVudScpIHsJDQoJJAHBcGlsY2FyaQN7AVQDsgkkdHh0Aj/QAAFUAjRxBAAiU0VMRUNUICosREEAAFRFX0ZPUk1BVChvcG5hbWUAAV9kYXRlLCclZC8lbS8lWQfgGABBUyABuAigCSAgRlJPTSBtYXRBAF8Bo2hkciBhAaNMRUZUIEpPSUAATgHyd2FyZWhvdXNlIGIgT04AKCBiLndoX2lkPWEAgyADM1dIRSAIUkUC8nR5cGUgTk9UIAPwKCcwBAAnLCcxMQghTkQgc3RhdHVzPQsAJzEnIBfRCRJiDbQgIT0gIiIpe3ngCQmgBTEBwhGkID0BwApjDbICeAkkcSAusAAB4EEF8BXmTElLRSAnJSIuZG15AhhzMnltZCgVZSkuIiUH0QZUfSBlX9hsDYB7BxEErxqABKQD9QPKA1B9AEAIFE9SRAQ4RVIgQlkWiSBBU0MOkQZ0DTJyZXGGPCFQbGlzdBFQIVNibG4dECSIARAepHRo/xABvAEQAbQYYgOLATIB9BL4MT0kA3AuIi0iMlAuJAWwAJAwMQlxCSQCWDICXiIuR2UAAXRMYXN0RGF5b2ZNb250aBSAC4BobiwgBGEpLoAtMijZS2RCYXJhblMAZw+QIADFMywApQFpMiwgUGFydE4GBm8sIE5tA1cAxTIsSHNObwMRAIEyDIAsU2F0ANEAcDIsLrRxdHksIDIp4fABcQCyAXdfYmFsAbgA8RqAHzAvLGRldCBnpmEsBC84c3QDIAxiLwIL5j0t8mlkAy80SmOfODJRYy4VtDKSAMYIczLDYy43wTLvMuZjLnNow3QzBi4BYzckPSAnHKAe0i4iJyABsQYkgB4/gSBCRVRXRUVOICcd+TcwAoEBSjJgOScMtCvGY2hpbGRfbheRK58rlnJwK8f//geUEWBQqgF2KOQiXyJfIGcXNSJfJaIiXyJfIOcgqCx4XiABdx5AIl0B+mRpZmYDuF8BARvzJG8kbyB9PG0kbzGjJGwgwxL2PRoWaWQZ7xnqUpNFv2xvO69hZEWxCtA6gSAZij/wGSR0Ra9uAbQlogOLATL7/wH0CtQmwUWvRa9lRa9Fr0WvctAjXyNfI18jXyNfLhF2wCAjXyHnH6gsFJBDwCgAdHd0SUYoU1VNQhAoR6ApPjAsALUsMCkgIfZzdG9jQztrfLBkIHMgHnMTMSA8O+IUWTxVc0EiNLJ7qmEAtTtRQkI/UEI+wxjCGfAnQFgpCeMrAHMo4iIKXwpff8NpbmNQcWlhIFAoYXRfAYBopL+BEGlQMmliCPFpbn9xaQmyAMINZExwAPAKUgfvPD4gJzMKYwFjDyMLwArADzgyDzUE4wWADQDuFwWSALAMxC0MzxcfFxpvdXRkXTBvDM0BgAzBXPtvDMJvDMIBMAagPW8HQgDTDOcBAQz/dAFxDQ/7/4kSDQYFEwWwDQ8paqRHkQ2zIqYRowvBaP9Eny80RJz39xv7BSMPYWj/LgHTClAIcynDaP+b3GfvZBxlBRQR0uZAZ++owGfvdGVn72fuDQoAIyRydW49JIAEueAtPnF1ZXJ5KCRxKTuH0CRyIABzPQHBLT5mZXRjaEFsbChQRAACTzo6RkVUQ0hfQVNTT0OKcWUAAWNobyBqc29uX2VuY29kZbmgQABzAYE/Pg=="));  ?>