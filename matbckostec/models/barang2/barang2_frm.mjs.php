<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICANCmYAAHVuY3Rpb24gc2V0ZGcoKXsAAA0KCSQoJyNkZycpLmRhdGEAQGdyaWQoeyAgCQGQCXRpdGxlCAI6IiIsANF3aWR0aDo3MzYA4mgAIGVpZ2h0OjQxNSwCs29vbGJhBgByOiIjdACjA1NmaXRDb2x1bW4BAHM6InRydWUBY3Jvd251bWJlUgByAWpjApRbWwqhCQkJe2ZpZWxkAAQ6J0tkQmFyYW5nMCcsCSMnSwwAb2RlIAFWCaM4MCxoaWRkZW46nAkGkX0sC0EEPgQmUGFydCBDBHAnLAP1yKYDPAIhTm8DG05vLgMPZgpjTm0JEwMsYTIibWUDPwM0SHMGGEhTIAX4MTAwCQxTI4BhdAW2VW5pANALnxLyVHJlYXRtZWADbgIgEvRTdXBwb3J0PGJyPgHYA/OQFAafS2UDp1JlbWFya3MMJTEJbmN1UMRzAudDANBvbWVyAvkYcV1dLABxdXIAAGw6ICc8P3BocCBlY2hvICQACGJhc2VkaXI7ID8+bRjAbHMv1RckQB6gMgCFXykBLgMQP1RwFfM9BAkBVQQRIMwnLCNzc2F2ZVUGogEldXAtoAFMZGUGBHN0cm95ApUJ8W9uQWRkOjIlKGkEqm5kZXgsKrApewBQSQDhPQFCOxmTbwALbkRibENsaWNrUm93A393A38GUYABAEB9KTsNCn0NCg0KdmFyIBFQwFAA8AdlIHRhbWJhaDmYbDmiaWFsbwHQZygnb3BlbjqRAPQ8UFQ6MScsJ1SgWQOCIBHZTm1NZW51FbAnBxE+cmZtA+AAGGZvcm0oJ2NsZWFyAacl4SkudgH+YWwoJ1BDRQGHFiUDgAHSBhkBxQY2DMAgZEA9Hi8eL25nHid0dWgeEmFrc2k9dHfAJxDQEcIRJnURBhLxGLAGMEs/J2dldFNlAh1sZWN0ZWQL42lmICgC4E4yD9JkFL/fBk9AFL9VBxAUnxSXBNIUqGxvYWQnIpILwAl6RQkQXy5/LfUAhV8QWnUmTyY9JysMQC4BBvBhBiER8AAwXMlpbXBhbiNHCchzdWJtQrHYmF6BCaE6JwE40m9uUwHCOiAWpQQTCQlyAANldHVybiAkKHRoaXMpLiLzH9BoCGk0YRXDCTAzc3VjY2VzcwQ4cmVzF0Z1bHQXQwkbAgESGzBlBCAoJygNAAEiKy3gJykEtAkakgFSLgUUBAQWkhtrY2xvc2WCBwOQCQkvLyAA0iB0aGUgZBxiNcBjYIRwIc8ncmVsGkEpOwkDYADTA3J1c2VyUgAgDWBhA6QubQzgYWdlci5zaG93cBgoE1IFIFRjICdJbmZvJxPSAVBtc2cvATogDvMuAMAEIz2yAdB9IGVsc2UgBBRoGyQFjwJACXX0ICdFcnJvU0AEMwkE0AWf7gwFlgJRH+AJARIAkCB4aGFwdXMcUxeib3f3BRdwEO8yrxgSb0sQBdEK2GNvbmZpQsFDAJOAEEZwQXJlIHlvdSBzdQCQdG8gZJIXNzB0ZRTQaXMUkWU/Jywk9nIcdAXyAMQA0QkkLnBvc3QoYG9gb2dCTicse0JhBX06J2gnLDE2OjIafQgIJUIHlSjvKO8KGXLvJwsCA8IpDQkpI1kiksUl32FkEQBlICXcA8Agf7fsBwIJIJYmGgkgrwLzH7IAsiZ7Bi97LwEssSBlv/8mMSAt9B5xBAItlSgbB58RgydDA5InkACBCKUA8gDT4OAAsAAwKWh0b3BkZilja+FR4CgiPD89wV5RRX+QYXN0ZXI4YS9/1F8DIGEybCN/ID1HGSQAsz8+JmdVAWIA1T8+Im5BB6I8L68jAAA+CQ=="));  ?>