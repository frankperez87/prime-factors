# Prime Factors Generator
Allows you to easily generate an array of primes for a given number.

### Example Usage:
```
<?php

require 'vendor/autoload.php';

$generator = new PrimeFactors();

// Returns an array with all prime numbers for 100
$primes = $generator->generate(100);

print '<pre>';
print_r($primes);
print '</pre>';

```

### Example Output:
```
Array
(
    [0] => 2
    [1] => 2
    [2] => 5
    [3] => 5
)

```