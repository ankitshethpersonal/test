<?php
/* 
 * @File : the base file to get the object using container/depedency 
 *         call the function to download and view the repos
 *         
 * @TODO: Here, if time permits then can use factory method to download the diff. type of repos
 */

require_once __DIR__.'/vendor/autoload.php';

use Cimpress\Lib;

// get the main file object using container
$objPhpTest = Cimpress\Lib\DownloadContainer::getInstance();

// download and view repositories
$objPhpTest->downloadViewRepositories('symfony');