<?php

if (!function_exists('get_shorten_url')) {
    /**
     * Returns the link behind shorten url
     *
     * @return string
     */
    function get_shorten_url($url)
    {
        $headers = get_headers($url, 1);
        $url = $headers['Location'];
        return $url;
    }
}
