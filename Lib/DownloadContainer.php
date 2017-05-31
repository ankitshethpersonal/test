<?php

/**
 * @File :To create the object of download/view files as dependency injection container
 * 
 * @Author : Ankit Sheth (Cimpress Technologies)
 * 
 * 
 */

namespace Cimpress\Lib;

use Cimpress\Services as services;

class DownloadContainer {
    
    /* @Function : to get the instance with all depedencies
     * 
     */
    public static function getInstance() {
 
        $objPhpTest = new services\PhpTest();

        $objDownloadFiles = self::createObjDownloadFiles();        
        $objPhpTest->setObjDownloadFiles($objDownloadFiles); 
        
        $objViewFiles = self::createObjViewFiles();        
        $objPhpTest->setObjViewFiles($objViewFiles); 
        
        return $objPhpTest;
    }
    
    // create  the view files object
    public static function createObjViewFiles() {
        return new \Cimpress\Services\ViewFiles();
    }
    
    // create the download files object
    public static function createObjDownloadFiles() {
        return new \Cimpress\Services\DownloadFiles();
    }
}