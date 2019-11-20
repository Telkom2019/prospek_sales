<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');



set_include_path(implode(PATH_SEPARATOR, [
    realpath(__DIR__ . '/PHPExcel'), // assuming Classes is in the same directory as this script
    get_include_path()
]));

require_once 'PHPExcel.php';

class Excel extends PHPExcel{

               public function __construct(){

                              parent::__construct();

               }

}
