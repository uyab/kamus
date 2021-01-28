<?php

namespace Uyab\Kamus;

class Jawa
{
    public static function translate(string $word): string
    {
        switch ($word){
            case 'satu':
                return 'siji';
            case 'dua':
                return 'loro';
            default:
                return sprintf('Translasi untuk kata "%s" belum ada', $word);
        }
    }
}
