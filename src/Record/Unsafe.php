<?php

$unsafeHas = function($label, $rec = null) use (&$unsafeHas) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeHas) {
            return $unsafeHas(...\array_merge($__args, $more));
        };
    }
    return \is_array($rec) ? \array_key_exists($label, $rec) : \property_exists($rec, $label);
};

$unsafeGet = function($label, $rec = null) use (&$unsafeGet) {
    $num = \func_num_args();
    if ($num < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeGet) {
            return $unsafeGet(...\array_merge($__args, $more));
        };
    }
    $res = (\is_array($rec) ? ($rec[$label] ?? null) : ($rec->$label ?? null));
    if ($num > 2) {
        return $res(...\array_slice(\func_get_args(), 2));
    }
    return $res;
};

$unsafeSet = function($label, $value = null, $rec = null) use (&$unsafeSet) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeSet) {
            return $unsafeSet(...\array_merge($__args, $more));
        };
    }
    if (\is_array($rec)) {
        $copy = $rec;
        $copy[$label] = $value;
        return $copy;
    }
    $copy = clone $rec;
    $copy->$label = $value;
    return $copy;
};

$unsafeDelete = function($label, $rec = null) use (&$unsafeDelete) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeDelete) {
            return $unsafeDelete(...\array_merge($__args, $more));
        };
    }
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
