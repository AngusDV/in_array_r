# in_array_r() for PHP




The `in_array_r()` function is not a built-in PHP function, but rather a custom function that can be used to recursively check if a given `$needle` (string or integer) exists within a multi-dimensional `$haystack` array.


## Usage

```
array in_array_r(string|int $needle, array $haystack,bool $strict = false)
```




The function takes three parameters:

1.  `$needle`: The value (string or integer) to search for.
2.  `$haystack`: The array (or multi-dimensional array) to search in.
3.  `$strict`: (Optional) A boolean value that determines whether the search should be strict (using the `===` operator) or not (using the `==` operator).

The function first checks if the `$haystack` is an array. If it is, it loops through each item in the array. For each item, it checks if the item matches the `$needle` (using either the strict or non-strict comparison, based on the `$strict` parameter). If a match is found, the function returns `true`.

If the item is another array, the function recursively calls itself with the current item as the new `$haystack`. This allows the function to search through nested arrays until a match is found or the entire `$haystack` has been searched.

If no match is found after searching the entire `$haystack`, the function returns `false`.

So, to answer your question, the `in_array_r()` function can be used to check if a given value (string or integer) exists within a multi-dimensional array. It will search through all the nested arrays and return `true` if the `$needle` is found, and `false` otherwise.

## Installation

The easiest way to install this library is to use [Composer](https://getcomposer.org/):

```
php composer.phar require angus-dv/in_array_r
```

Then, when you run `composer install`, everything will fall magically into place,
and the `in_array_r()` function will be available to your project, as long as
you are including Composer's autoloader.

_However, you do not need Composer to use this library._

This library has no dependencies and should work on older versions of PHP.
Download the code and include `src/in_array_r.php` in your project, and all
should work fine.

When you are ready to run your project on PHP 5.5 or greater than, everything should
continue to run well without conflicts, even if this library remains included
in your project.
