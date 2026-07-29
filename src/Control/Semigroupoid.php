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

$_composeImpl = function($f, $g = null) {
    $num = \func_num_args();
    if ($num === 1) {
        return function($g) use ($f) {
            return function($a = null) use ($f, $g) {
                $__num = \func_num_args();
                $res = $f($g($a));
                if ($__num > 1) {
                    return $res(...\array_slice(\func_get_args(), 1));
                }
                return $res;
            };
        };
    }
    
    $res = function($a = null) use ($f, $g) {
        $__num = \func_num_args();
        $res2 = $f($g($a));
        if ($__num > 1) {
            return $res2(...\array_slice(\func_get_args(), 1));
        }
        return $res2;
    };

    if ($num > 2) {
        return $res(...\array_slice(\func_get_args(), 2));
    }
    return $res;
};

$exports['composeImpl'] = $_composeImpl;
return $exports;
