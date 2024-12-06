# PHP isset() and Array Initialization Bug

This repository demonstrates a subtle bug related to how PHP handles array initialization within the `isset()` function. The issue arises when attempting to increment a non-existent array index using `isset()` for checking existence before incrementing.

The `bug.php` file contains the problematic code.  The `bugSolution.php` demonstrates a more robust solution.

## Bug Description

PHP's behavior with `isset()` and array access can lead to an implicit creation of an array element if the index does not exist. Although this might appear convenient, it can mask errors when performing operations like incrementing.  In the provided example, we attempt to increment a non-existent element; instead of throwing an error or generating a `Notice`, PHP silently creates it with the default value of `0` and then increments it.