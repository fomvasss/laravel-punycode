<?php

if (!function_exists('punycode_encode')) {
    /**
     * @param string $input Domain name in Unicode to be encoded
     * @return string Punycode representation in ASCII
     */
    function punycode_encode($input)
    {
        return app('punycode')->encode($input);
    }

}

if (!function_exists('punycode_decode')) {
    /**
     * @param string $input Domain name in Punycode
     * @return string Unicode domain name
     */
    function punycode_decode($input)
    {
        return app('punycode')->decode($input);
    }

}
