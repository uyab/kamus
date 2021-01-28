<?php

if (! function_exists('to_jawa')) {
    function to_jawa(string $word)
    {
        return \Uyab\Kamus\Jawa::translate($word);
    }
}
