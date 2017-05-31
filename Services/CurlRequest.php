<?php
/**
 * @File : To make a curl request 
 * 
 * @Author : Ankit Sheth (Cimpress Technologies)
 * 
 * 
 */
namespace Cimpress\Services;

abstract class CurlRequest {
    
    abstract function getDownloadFiles($type);
    
    function apiRequest($repository) {
        try {
            $client = new \Github\Client();
            $repositories = $client->api('repo')->find($repository);
            
            return $repositories;
            
        } catch (Exception $ex) {
            //@TODO : log error in monolog, attached monolog with cloudwatch
            // (aws, so directly can view error on cloudwatch)
            return false;
        }
        
    }  
    
}

