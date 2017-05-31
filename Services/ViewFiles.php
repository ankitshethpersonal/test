<?php
/**
 * @File : To create the library module to view the files
 * 
 * @Author : Ankit Sheth (Cimpress Technologies)
 * 
 * 
 */
namespace Cimpress\Services;

use Cimpress\Views;

class ViewFiles {
    
    public $repositories = null;
    
    function ViewFiles() {
        
    }
    
    function setFiles($repos) {
        $this->repositories = $repos;
    }
    
    function showFiles() {
        // @TODO : can use here factory pattern to create the object based on type and 
        // view/loop the files based on the response we are getting in each type of class
        
        if ($this->repositories) {
            $viewRepos = $this->repositories;
            
            if (sizeof($viewRepos['repositories'])) {
                $totalRepos = sizeof($viewRepos['repositories']);
                $repositories  = $viewRepos['repositories'];
                
                \Cimpress\Views\Header::displayHtml();
                for ($r = 0; $r < $totalRepos; $r++) {
                    \Cimpress\Views\MainContent::displayHtml($repositories[$r]);
                }
                \Cimpress\Views\Bottom::displayHtml();
            }
        } 
        
        return false;
    }
    
}

