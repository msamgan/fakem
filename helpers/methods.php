<?php

const HISTORY_SIZE = 10;
const DEFAULT_WORD_COUNT = 100;
const DEFAULT_PARA_COUNT = 2;
const DEFAULT_API_USER_COUNT = 10;

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
