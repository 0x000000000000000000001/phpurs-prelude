<?php

$unsafeCoerce = function ($arg) {
    return $arg;
};

$exports['unsafeCoerce'] = $unsafeCoerce;
return $exports;