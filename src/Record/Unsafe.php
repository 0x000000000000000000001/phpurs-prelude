<?php

$unsafeHas = function($label, $rec) use (&$unsafeHas) {
    return \is_array($rec) ? \array_key_exists($label, $rec) : \property_exists($rec, $label);
};

$unsafeGet = function($label, $rec) use (&$unsafeGet) {
    return (\is_array($rec) ? ($rec[$label] ?? null) : ($rec->$label ?? null));
};

$unsafeSet = function($label, $value, $rec) use (&$unsafeSet) {
    if (\is_array($rec)) {
        $copy = $rec;
        $copy[$label] = $value;
        return $copy;
    }
    $copy = clone $rec;
    $copy->$label = $value;
    return $copy;
};

$unsafeDelete = function($label, $rec) use (&$unsafeDelete) {
    if (\is_array($rec)) {
        $copy = $rec;
        unset($copy[$label]);
        return $copy;
    }
    $copy = clone $rec;
    unset($copy->$label);
    return $copy;
};

$exports['unsafeHas'] = $unsafeHas;
$exports['unsafeGet'] = $unsafeGet;
$exports['unsafeSet'] = $unsafeSet;
$exports['unsafeDelete'] = $unsafeDelete;
return $exports;
