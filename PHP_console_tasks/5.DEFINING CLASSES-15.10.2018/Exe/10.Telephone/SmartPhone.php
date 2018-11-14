<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 4:29 PM
 */

class SmartPhone implements ICall, IBrowse
{
    /**
     * @param string $phoneNumber
     * @return string
     * @throws Exception
     */
    public function call(string $phoneNumber): string
    {
        if (preg_match_all("/[^0-9]+/", $phoneNumber)){
            throw new Exception("Invalid number!");
        }
        return "Calling... {$phoneNumber}\n";
    }

    /**
     * @param string $url
     * @return string
     * @throws Exception
     */
    public function browse(string $url): string
    {
        if (preg_match_all("/[0-9]+/", $url)){
            throw new Exception("Invalid URL!");
        }
        return "Browsing: {$url}!\n";
    }


}