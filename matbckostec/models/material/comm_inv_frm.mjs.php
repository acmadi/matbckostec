<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICANCmYAAHVuY3Rpb24gc2V0ZGcoKXsAAA0KCXZhciBjb21tX2lkID0EACAkKCcjAOQnKS52YWwoKTsNZAAKAnABkWRnAUBkYXRhZ3JpZCh7EAAgIAkBkAl0aXRsZToiRmluaQAAc2hlZCBHb29kcyBMaXN0IkAQLAIBd2lkdGg6NzAwAOJoZWlnDABodDoyAPAD429vbGJhcjoiI3SgAACjMgNjZml0Q29sdW1uczoidBAFcnVlAWNyb3dudW1iZXIBamMClCAAW1sOUQkJCXtmaWVsZDonS2QAQEJhcmFuZzInLApjJ1BhcnQgBDBOby4nLAlzODB9LApRAzZIc05vkiEC90hTAtkxNQLtU2F0AtdVbml0BY9EUGYIs3F0eQhWUXR5CBYxEJBhbGlnCgtuOidyEaEnCQxwcmljZQOmUADjC8Og3gO/LAy6YW1vdW4JIA+0QQD0A98HgwPBXUAAXQQydXJsOiAnPD9waHAgZWMAAGhvICRiYXNlZGlyOyA/Pm0AAW9kZWxzL21hdGVyaWFsLyLzFApudl8hYS4DMD9yZXE9bCAAJgGzZBrLPScrAKQGQH0lEX0lQSjrVXImwHsCECkRP01kbyj3AMInkCjVI3Eo73st8AkJC58Ln20Ln8D8LPALlmRnRGV0JgdSC4AAggchC380U0NhP6NyaTSQAjEJUwERCuAyeQ1QCRdjNTg2FhIwZAv9MzE1LAOhCS7vA0Eu7w5SMpQzNAcBMdNjMH/KBSfDF9JubyRmQz7wLiBJbnYuLek2Ld315gNyDIAn9wOYRBRgJzRUMX4TYAb4RE8GeQLeYyh/dXMqV0MA0G9tZXIFuBChKY8piyl/KX8pcgBhbWVudSZwaWxjG3Ad8CQoIiMA5EDwIk70KycmdHh0AggA5AIFHAJvbkNsAQFpY2tSb3c6LGUoaW5kZXgsG0AAWil7aW5zZXJ0XwbRKAERLvAJJB8g87cCfS/hJFEXkmlkJGAvQQQQLgEkM7EJAiYWMAtDmQQCJm5vAisb0ikuAHFib3goJ19wVmE/82x1HRADNgHBA1YbgAd6AQIB6QcyCNBibz7RBR3FxALwCChwYXkQEHQMaAEkBRZwb2wB6W9sxAcBqA/pcG9kAaZjb250YWluIiAPyQFEg9gCZnNhaWxfDbEGAABxD+8uAjYDVmN1cgeDcmVuY3kDQBeGATQCRnZlc3NlC2kBE42OAgdveV8SUgQldgESAgZmb2IF8GxDCV8u3dkB8AK3cnKyAv8cJ2YCMwM2JRB1bwBjECkuBk/jmB90AlYDdmNuZgZvBmcB8Ck7SnEnoW5vdDgfaWYSOQETBMZhdXRoX3NtAAUgEEUBRgJmnu0DUGVzAigBAgHiKjBkiaCHUC6Sd03xApBkZqAAMG9nKCdjbG9zZScCogjhdGwxVSChYmgCAHNob3coAXlUAXJoaWRlAXDPxwvVAvBIcAeBAvQBgDmwkYtOQGJvR2EgXWRo//7wabAHIA3RBxJKAAixhscpOvEyJJJQAgAJcGFuF/ZlbFeQkjV/EJOkau9q72rvN6Fq72l2YTgQaSOHZCyQU2lkRl/jCZcBpHRleHQBzwNjfdGH74igZW1vdCLwAUNp2JihBGRm72YHDoekl11mrv/Ql1+aJ2MOl09ofwijl0xlTxmxXL9uXL9fZGV0/x9coxEyXMB4oCOyI9g1kF9hcmVmArJc5RlSIxRXcb//AQIpNRIu0o+SLwEA4CfYASAGEmYFYuUIpQX1E8NQ1//5AQIpkilhEtIB1wDxAcYR8UKPYfYB8AKxCFA8L8RjAAA+CQ=="));  ?>