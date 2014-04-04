# drop

drop is a simple function to inspect one or more variables in a PHP script
and halt execution of that script. When debugging, I've found it helpful to
simply kill a script and expose the actual type/contents or a var.

# Usage

In your script simply call drop($var[, $var[, ...]]);

# Installation

Install the [Packagist archive](https://packagist.org/packages/henderjon/drop)
using [Composer](http://getcomposer.org/). I will *generally* respect
[Semantic Versioning](http://semver.org/). Learn about how Composer
does [versions](https://getcomposer.org/doc/01-basic-usage.md#package-versions).

*Note the absense of v1.0*

```
{
	"require" : {
		"henderjon/drop": "0.1.*"
	}
}
```

# Authors

- Jon Henderson
	- [Github](https://github.com/henderjon)
- Jesse Donat
	- [Github](https://github.com/donatj)
	- [Homepage](http://donatstudios.com)

# License

See LICENSE.md for the [BSD-3-Clause](http://opensource.org/licenses/BSD-3-Clause) license.





