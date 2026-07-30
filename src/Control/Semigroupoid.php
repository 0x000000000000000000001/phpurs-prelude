<?php

$exports = [];

class PhpursCompose {
    public $f;
    public $g;
    
    public function __construct($f, $g) {
        $this->f = $f;
        $this->g = $g;
    }
    
    public function __invoke($a) {
        $g = $this->g;
        $f = $this->f;
        return $f($g($a));
    }
}

$_composeImpl = function($f, $g) {
    return function($a) use ($f, $g) {
        return $f($g($a));
    };
};

$exports['composeImpl'] = $_composeImpl;
return $exports;
