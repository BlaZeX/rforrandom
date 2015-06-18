<?php

## RedirectiNATOR ##


/*
The MIT License (MIT)

Copyright (c) 2015 eclipsed-ninja

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

/*
 *As asked by Blaze, here : http://www.wjunction.com/92-development-area/202672-mod_rewrite-help.html
 * I'll probably make this into a global redirector script when I have time
*/

/*
 *.htaccess code scheme

RewriteEngine On
RewriteRule ^([^/]*)/$ /category.php?page=$1 [L]
RewriteRule ^([^/]*)/$ /category.php?page=$1 [L]
RewriteRule ^([^/]*)$ /category.php?page=$1 [L]

This will redirect domain.com/category/page1 to domain.com/category?page=page1

*/

if ($_GET['page'])
$page = $_GET['page'];

$array=array("page1","page2","page3"); // Security Measure so that no one can access protected file.

if (in_array($page, $array)) {
    include_once($page.".php"); // The .php is basically the extension we're adding
    }
    
    else {
        echo "Error : Hack Attempt";
    }
    

