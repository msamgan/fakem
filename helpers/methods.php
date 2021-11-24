<?php

const HISTORY_SIZE = 10;

if (!function_exists('keyFormatter')) {
    /**
     * @param $key
     * @return string
     */
    function keyFormatter($key): string
    {
        return ucwords(str_replace('_', ' ', $key));
    }
}

if (!function_exists('genders')) {
    /**
     * @return array
     */
    function genders(): array
    {
        return ['male', 'female'];
    }
}
