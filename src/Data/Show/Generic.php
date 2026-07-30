<?php

$intercalate = function ($separator, $xs) use (&$intercalate) {
    return implode($separator, $xs);
};

$exports['intercalate'] = $intercalate;
return $exports;
