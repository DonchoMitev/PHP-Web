<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 4:33 PM
 */

interface IBrowse
{
    public function browse(string $url) : string ;
}

interface ICall
{
    public function call(string $phoneNumber) : string ;
}

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
            throw new Exception("Invalid number!\n");
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
            throw new Exception("Invalid URL!\n");
        }
        return "Browsing: {$url}!\n";
    }


}

spl_autoload_register();
$numbers = explode(" ", readline());
$sites = explode(" ", readline());

foreach ($numbers as $number) {
    try {
        $phone = new SmartPhone();
        echo $phone->call($number);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

foreach ($sites as $site) {
    try{
        $siteche = new SmartPhone();
        echo $siteche->browse($site);
    }catch (Exception $e){
        echo $e->getMessage();
    }
}