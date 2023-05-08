<?php

if (! function_exists('linkPreload')) {
    /**
     * Generate a link preload tag.
     *
     * @param  string  $url
     * @param  array   $attributes
     * @return string
     */
    function linkPreload($url, $attributes = [])
    {
        $attributes = array_merge(['rel' => 'preload', 'href' => $url], $attributes);
        return '<link ' . html_build_attributes($attributes) . '>';
    }
}