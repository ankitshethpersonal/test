<?php
/**
 * @File : Main file to (bootstraping)
 * 
 * @Author : Ankit Sheth (Cimpress Technologies)
 * 
 * 
 */

namespace Cimpress\Services;

class PhpTest {
    
    private $objViewFiles     = null;
    private $objDownloadFiles = null;
    
    function PhpTest() {
        
    }
    
    // set the download files object using contrainer
    function setObjDownloadFiles(DownloadFiles $obj) {
        $this->objDownloadFiles = $obj;
    }
    
    // set the view files object using container
    function setObjViewFiles(ViewFiles $obj) {
        $this->objViewFiles = $obj;
    }
    
    /* @Function : to downaload and display the repositories based on type
     * @args : type of repo
     * @return : display the repos in html 
     */
    function downloadViewRepositories($type) {
        $repos = $this->objDownloadFiles->getDownloadFiles($type);
        //$this->objViewFiles->setFiles($repos);
        $this->viewFiles($repos);
        
        return;
    }
    
    /* @Function : to set the files in view files object and also call the show files
     * @args : repos array
     * @return : html or false
     */
    function viewFiles($repos) {
        if ($repos) {
            $this->objViewFiles->setFiles($repos);

            $this->objViewFiles->showFiles();
        } else {
            //return false;
            echo "No repos found";
        }
        
    }
    
}