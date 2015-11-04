# henderjon/drop

drop is a simple function to inspect one or more variables in a PHP script
and halt execution of that script. When debugging, I've found it helpful to
simply kill a script and expose the actual type/contents or a var.

Peruse the tests or, if present, the examples directory to see usage.

`drop` has two incarnations. `drop()` uses `var_dump()` and `dropv()` uses
`print_r()`. The main difference is that `dropv` will give you the full value of
each arg where `drop` will give you the ellipsis on long values.

[![Latest Stable Version](https://poser.pugx.org/henderjon/drop/v/stable.svg)](https://packagist.org/packages/henderjon/drop)
[![Build Status](https://travis-ci.org/henderjon/drop.svg?branch=master)](https://travis-ci.org/henderjon/drop)





