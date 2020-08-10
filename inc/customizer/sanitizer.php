<?php

if (!function_exists('aemi_sanitize_checkbox'))
{
    function aemi_sanitize_checkbox($input, $setting)
    {
        if ($input === true || $input === false)
        {
            if ($input === true)
            {
                return 1;
            }
            else 
            {
                return 0;
            }
        }
        else
        {
            return $setting->default;
        }
    }
}

if (!function_exists('aemi_sanitize_radio'))
{
    function aemi_sanitize_radio($input, $setting)
    {
        $input = sanitize_key($input);
        $choices = $setting->manager->get_control( $setting->id )->choices;

        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
}


if (!function_exists('aemi_raw_js_code'))
{
    function aemi_raw_js_code($input)
    {
        return $input;
    }
}