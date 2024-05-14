<?php

namespace TokenGenerator\RandomTokenGenerator\src;

class RandomTokenGenerator
{
    public static function generatetoken($length = 32)
    {
        return bin2hex(random_bytes($length / 2));
    }
}