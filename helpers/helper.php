<?php
/**
 * Global Helper Function
 * Code your helper function globally here.
 */

namespace Helpers;

if (!function_exists('env')) {

    /**
     * Global Env function
     *
     * @param string $key
     * @param string $defaultValue
     * @return string
     * @author Prakash.j <prakashbosco1992@gmail.com>
     */
    function env(string $key, string $defaultValue = '') : string
    {
        return isset($_ENV[$key]) ? $_ENV[$key] : $defaultValue;
    }

}