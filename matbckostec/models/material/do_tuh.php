<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHAgDQpyZXF1aXJlXwAAb25jZSAiLi4vYWJzcGF0aEgGLgHwIjsCDXNlc3Npb25zAe8D4XAGDGRvY29uAc8BwWZ1bmN0A7AB5Q0KAAAvL1ZBUklBQkVMIFlBTkcgAABESSBQT1NUDQokZG9faWQ9ABMkX1JFUVVFU1RbJwESJ10I8AHBJABubwHMbm8BxmRhdGU9ZG15czIMXHltZCgEOwHBJ10pBGFzBi0BEgRjdmUDgWhpY2xlXwZ7AWcCY2RyaXZlcgiaweABIgHjbm90ZXMB2QESAcIPkUZPUk0gAAJMSVNUIERBVEEgTUFURRCgTIAAD7Bub2xpc3Q9ZXhwbG9kZSgHACJgIiwgDGgB8wxUS2RCYXJhbmd48DIC/xOEAiYDJHF0eQLPAsQBwAJkcHJpY3hMZQKPAoQB4gKkdG90XwOAPTAVQQDRYW0IQG91bnQBA2ptbG4MQHQ9c2l6ZQiAb2YoJAvTKS0xAuBmb3IgKCRpgoACoCAkaTwkAsU7AOArKyl7DQoJYI8kBQEF0CArPSAkAIBbJGkgEQGDBoMBuTEOKiQJkgJkfQ0KFNBha3NpGFkBARhEJAgAdGdsPSERKCdZLW0tZCBIOmkSADpzJyHSdXMdgVNFU1NJT05bJwCAdXNlck5hbWUDpU5tTWVudT0ICCJkZWwgMXkgb3JkZXIywQ0KdAQAcnkgewkL4XNxbFtdID0gIlMABlRBUlQgVFJBTlNBQ1QFIAKhCTBgaWYP8AkBPT0ndCcPEgNxCS8vVEEAEk1CQUggSEVBREVSBKAJJAS2SRAATlNFBMBJTlRPIG1rdF9kb2hhSmQUcAJRCQkgIDJiLABgbm8AYWQwsCy2rC2CLAIlFTQsAIEUMywthywtMywqsgMlKSASh1ZBTDhQICgBJSc4MWlkJywAkjewAJPr/gbhAUEHEicHJiccdQHBB3cA4QenAOEH0wChCAIniBwG9SkiOxGUQUtISVIgEf4CkRNmREUHuFRBSUwJAyImPyjyJjUJAmMV7xXnZGV0wCIPhxWAaWQsY2hpbGRBsCxmZ0pALL//KYAsJ4IIYRhBEw8SchMDMBMqMQ6BOdYBFQTQALUFQuPAANIFlhCEfS8vEJoPIwJhAEEka2V0bG8AuGc9IkFkZCAkKqMgGxMncg9VbXNngFApwmF2ZSBTdWNjXXAuAhMkZXJyowEB6UYVAEVEIQHTEzJ9IGVsc2UgLClAAHUsJC8vSEFQVVMgRFVMVSBTDABFTVVBCVIsEj0iREVMRVRFIEYQWVJPTSv4V0hFUkUrwz0SxQbjLy8Z06l9A69kRYEgA69kJwOlVTRPOPM0TzRPM+FuNE//9hPQNmAsURqgNE9jITRPAyAhTw6FM7M0T28lwDRPefn/I2EH8TuzAOE0T2VyAYE0TxiRI7UR2B0iR2ABMiTD/7sz31oPELAFERoDJKEVfzPfM995M99G3xDCJ2PkMULP8BNwM990eQHFM99EVTPWDvgMgQBBM7ZFZGl0qX8zzwoSoyQxxFVwTxEgM88CCzPpM4RtwRcQMpL/wAeCMe8x7yERMe8DrwOvA68eAg7mRGVsZXRln/8PDiAgCcEAQQ8lApQPLw8kAgQPKgaxBEAic3DAImnfuEpwZcYwHSB5ECuhd9AAcUyDJxuRBFomwUNPTQ4ITUlUImGCBeBegGVhY2goBmEgYXPAgYLQdPMvL2VjaG8A8C4iXHJcbkGjQAkkqkAtPnF1ZXJ5KCRxfvEJfQRAwCAO8gLyanNvbl9lbmNGIChhcnJhCAN5KCdzUhMnPT50cnVlLCcPEADAiCARgSkpOxKAfSBjYXQIECBQRE9FCWB4Y2VwroEgJAC3KYEzB7giUk9MTAP0QkFDSyIpDHIHvwezBrRZQwyELgWnLT4IIGdldE1b0GFnZSgpCOANCglleAwAaXQoMA2hDZA/Pg=="));  ?>