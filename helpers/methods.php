<?php

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
