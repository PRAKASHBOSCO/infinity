<?php
/**
 * Global Helper Function
 * Code your helper function globally here.
 */

if (!function_exists('issetenv')) {

    /**
     * Global Env function
     *
     * @param string $key
     * @param string $defaultValue
     * @return string
     * @author Prakash.j <prakashbosco1992@gmail.com>
     */
    function issetenv(string $key, string $defaultValue = '') : string
    {
        return isset($_ENV[$key]) ? $_ENV[$key] : $defaultValue;
    }

}