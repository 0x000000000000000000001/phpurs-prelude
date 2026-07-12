<?php

$throwErr = function($msg) {
    return function() use ($msg) {
        throw new \Exception($msg);
    };
};

$exports['throwErr'] = $throwErr;
return $exports;
