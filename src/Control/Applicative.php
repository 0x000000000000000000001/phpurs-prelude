<?php

$arrayPure = function($x) use (&$arrayPure) { return [$x]; };

$exports['arrayPure'] = $arrayPure;
return $exports;
