
<!-- Les constantes sont notées en MAJUSCULE sans le $ sont définies par : 
const
define()
-->
<?php
define("PI", 3.14);
define("ROOT", "http://localhost./PHP-demo1");
const DIR = "C:\wamp64\www\PHP-demo1";

var_dump(PI);
var_dump(ROOT);
var_dump(DIR);

if(defined("PI")){
    echo var_dump(PI);
}
