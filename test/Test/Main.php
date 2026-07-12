<?php

$testNumberShow = function($showNumber) use (&$testNumberShow) {
    return function() use ($showNumber) {
        $testAll = function($cases) use ($showNumber) {
            foreach ($cases as $c) {
                $expected = $c[1];
                $actual = $showNumber($c[0]);
                if ($expected !== $actual) {
                    throw new \Exception("For " . $c[0] . ", expected " . $expected . ", got: " . $actual . ".");
                }
            }
        };

        $testAll([
            [0.0, "0.0"],
            [1.0, "1.0"],
            [-1.0, "-1.0"],
            [500.0, "500.0"],
            [1e10, "10000000000.0"],
            [1e10 + 0.5, "10000000000.5"],
            [-1e10, "-10000000000.0"],
            [-1e10 - 0.5, "-10000000000.5"],
            [1e21, "1e+21"],
            [1e-21, "1e-21"],
            [1.5e21, "1.5e+21"],
            [1.5e-10, "1.5e-10"],
            [NAN, "NaN"],
            [INF, "Infinity"],
            [-INF, "-Infinity"]
        ]);
    };
};

$makeArray = function($length) {
    $arr = [];
    for ($i = 0; $i < $length; $i++) {
        $arr[] = $i;
    }
    return $arr;
};

$exports['testNumberShow'] = $testNumberShow;
$exports['makeArray'] = $makeArray;
return $exports;
