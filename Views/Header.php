<?php
/**
 * @File : To display the html for headers
 * 
 * @Author : Ankit Sheth (Cimpress Technologies)
 * 
 * 
 */
namespace Cimpress\Views;

class Header {
    
    static function displayHtml() {
        echo "<table width='100%' border='1'>";
        echo "<tr>"
                . "<td width='20%'><h5>Repository Name</h5></td>"
                . "<td width='60%'><h5>Description</h5></td>"
                . "<td width='20%'><h5>Owner</h5></td>"
            . "</tr>";
    }
}

