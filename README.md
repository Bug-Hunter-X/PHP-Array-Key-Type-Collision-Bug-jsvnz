# PHP Array Key Type Collision Bug

This repository demonstrates a subtle bug in PHP related to how it handles array keys. When you use a non-string value as an array key, PHP will implicitly cast it to a string. This can lead to unexpected behavior, particularly when using numeric keys that might be cast to the same string.

The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a corrected version.

## Bug Description

The issue lies in the implicit type coercion of array keys in PHP.  Numeric keys that have the same string representation (like 1 and 1.0) will be treated as the same key. This causes keys to overwrite each other resulting in an incorrect number of elements in the array and unexpected results.

## Solution

The solution involves ensuring all array keys are explicitly defined as strings to avoid any unintended type conversion by PHP.  This eliminates ambiguity and guarantees that each key is unique.