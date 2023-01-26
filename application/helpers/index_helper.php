<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('lcfs_data'))
{
    function lcfs_data($var = '')
    {
        $path = base_url('public/json/home.json');
        $json = json_decode(file_get_contents($path), true);
        return $json[$var];
    }   
}

if ( ! function_exists('lcfs_info_data'))
{
    function lcfs_info_data($var = '')
    {
        $path = base_url('public/json/info.json');
        $json = json_decode(file_get_contents($path), true);
        return $json[$var];
    }
}

if ( ! function_exists('lcfs_about_data'))
{
    function lcfs_about_data($var = '')
    {
        $path = base_url('public/json/about.json');
        $json = json_decode(file_get_contents($path), true);
        return $json[$var];
    }
}

if ( ! function_exists('lcfs_contacts_data'))
{
    function lcfs_contacts_data($var = '')
    {
        $path = base_url('public/json/contacts.json');
        $json = json_decode(file_get_contents($path), true);
        return $json[$var];
    }
}

if ( ! function_exists('my_base_url'))
{
    function my_base_url($var = '')
    {
        return base_url('index.php/'.$var);
    }   
}