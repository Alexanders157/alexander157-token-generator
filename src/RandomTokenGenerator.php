<?php

namespace TokenGenerator;

class RandomTokenGenerator
{
    public static function generatetoken($length = 32): string
    {
        return bin2hex(random_bytes($length / 2));
    }
}