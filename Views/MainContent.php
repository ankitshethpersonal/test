<?php
/**
 * @File : To display the main content html data
 * 
 * @Author : Ankit Sheth (Cimpress Technologies)
 * 
 * 
 */
namespace Cimpress\Views;

class MainContent {
    
    static function displayHtml($data) {
        
        echo "<tr>"
                . "<td>".$data['name']."</td>"
                . "<td>".$data['description']."</td>"
                . "<td>".$data['owner']."</td>"
            . "</tr>";
    }
}

