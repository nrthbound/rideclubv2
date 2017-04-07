<?php

    /**
     * Create notification from Controllers
     * @param  string $message The message to flash to the alert
     * @param  string $level   What kind of alert? info, error, success
     * @return void
     */
    function flash($message, $level = 'info')
    {
        session()->flash('flash_message', $message);
        session()->flash('flash_message_level', $level);
    }

    /**
     * Removes spaces in strings
     * @param  String   $str    The string to remove spaces from
     * @return String   Returns the newly formatted string
     */
    function str_trim_spaces($str)
    {
        return str_replace(' ', '', $str);
    }

    /**
     * Format the users First and Last name to a generic display name
     * @param  String $str The name from the Register input
     * @return String      The newly formatted generic display name
     */
    function format_display_name($str)
    {
        return strtolower(str_trim_spaces($str).str_random(4));
    }
