<?php

require 'vendor/autoload.php';

$primes = (new PrimeFactors)->generate(100);

print '<pre>';
print_r($primes);
print '</pre>';