<?php

$exports = [];

class PhpursCompose {
    public $f;
    public $g;
    
    public function __construct($f, $g) {
        $this->f = $f;
        $this->g = $g;
    }
    
    public function __invoke($a = null) {
        $__num = func_num_args();
        $g = $this->g;
        $f = $this->f;
        
        $res = $f($g($a));
        
        if ($__num > 1) {
            return $res(...array_slice(func_get_args(), 1));
        }
        return $res;
    }
}

$_composeImpl = function($f, $g = null) use (&$_composeImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_composeImpl) {
            return $_composeImpl(...array_merge($__args, $more));
        };
    }
    
    return new PhpursCompose($f, $g);
};

$exports['composeImpl'] = $_composeImpl;
return $exports;
