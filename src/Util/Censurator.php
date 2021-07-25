<?php

namespace App\Censurator;

class Censurator
{
    const CENSURED_WORDS = [ "Nazi", "Hitler"];

    public function purify(string $text){
        foreach(self::CENSURED_WORDS as $censuredWord) {
            $replacement = str_repeat("*", mb_strlen($censuredWord));
            $text = str_ireplace($censuredWord, $replacement, $text);
        }
        return $text;
    }
}
