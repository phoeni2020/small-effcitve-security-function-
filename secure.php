<?php
function secureinputs($input)
{
   if (is_array($input))
   {
       foreach ($input as $word)
       {
           $char = str_split($word);
           $res = ord($char);
           if($res == 96 ||$res ==60 || $res == 61 || $res == 62 || $res == 59 ||$res == 44 || $res == 37 ||$res == 36||$res == 34)
           {
               exit("<h2>SPECIAL CHARS LIKE (' ` ? $ \" ! < > = ) ARE RESTRICTED</h2> ");
           }
       }
       return true;
   }
   else
   {
       $chars = str_split($input);
       foreach ($chars as $char)
       {
           $res = ord($char);
           if ($res == 96 || $res == 60 || $res == 61 || $res == 62 || $res == 59 || $res == 44 ||$res == 47|| $res == 37 || $res == 36 || $res == 34 || $res == 33) {
               exit("<h2>SPECIAL CHARS LIKE (' ` ? $ \" ! < > = ) ARE RESTRICTED</h2>");
           }
           return $input;
       }
   }
}
