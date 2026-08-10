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
        $__num = \func_num_args();
        $g = $this->g;
        $f = $this->f;
        
        $res = $f($g($a));
        
        if ($__num > 1) {
            return $res(...\array_slice(\func_get_args(), 1));
        }
        
        return $res;
    }
}

$_composeImpl = function($f, $g, $a) {
    return $f($g($a));
};

$exports['composeImpl'] = $_composeImpl;
return $exports;
