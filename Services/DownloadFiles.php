<?php
/**
 * @File : To create the library module to download and display the git hub repositories
 * 
 * @Author : Ankit Sheth (Cimpress Technologies)
 * 
 * 
 */

namespace Cimpress\Services;

use Cimpress\Services;

class DownloadFiles Extends CurlRequest {
    
    function DownloadFiles() {
        
    }
    
    /** @Function:  to actual download the files based on type
     * @param type $type
     * @return boolean
     */
    function getDownloadFiles($type) {
        
       // @TODO : can use here factory pattern to create the object based on type and call the particual download method 
       $repoDownload = ""; 
       switch ($type) {
           case "symfony": $repoDownload = "symfony";
                           break;
                    
       } 
       
       if ($repoDownload != "") {
           return $this->apiRequest($repoDownload);
       } else {
           return false;
       }      
       
    }
    
}