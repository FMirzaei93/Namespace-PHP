<?php

namespace Furn;
include 'furniture/Chair.php';
include 'furniture/Bed.php';
// what you include here must be the real path of the class(without considering the namespace).


class Table {
    //Now this class lives in Furn namespace.
    
    function __construct() {

    echo 'Hey! I am Table class from Furn namespace';
    
    
//    For calling a class outside of the name space, we use a backslash befor the name of the class.
    echo ' | ';
    new \Chair();
    
    
//    Calling a class in the same namespace.
    echo ' | ';
    new Bed();
}

}
