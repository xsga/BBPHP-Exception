# BBPHP-Exception

A lightweight PHP library that provides a reusable base exception class with support for structured context parameters.

## Features

- Strict typing and modern PHP support.
- Custom exception class: `Xsga\BBPHP\Exception\GenericException`.
- Optional context parameters via `getParams()`.
- PSR-4 autoloading ready for Composer projects.

## Requirements

- PHP 8.4+

## Installation

Install with Composer:

```bash
composer require xsga/bbphp-exception
```

## Usage

```php
<?php

declare(strict_types=1);

use Xsga\BBPHP\Exception\GenericException;

try {
	throw new GenericException(
		message: 'Validation failed',
		code: 422,
		params: ['field' => 'email', 'reason' => 'invalid_format']
	);
} catch (GenericException $e) {
	echo $e->getMessage(); // Validation failed
	print_r($e->getParams());
}
```

## API

### `GenericException`

Constructor:

```php
public function __construct(
	string $message = '',
	int $code = 0,
	protected array $params = [],
	?Throwable $previous = null
)
```

Methods:

- `getParams(): array` Returns the context parameters passed to the exception.

## Development

Useful Composer scripts:

- `composer lint` Run parallel PHP lint.
- `composer style` Check PSR-12 style.
- `composer style-fix` Auto-fix style issues.
- `composer analyze-errors` Run Psalm (errors only).
- `composer analyze-info` Run Psalm (with info).
- `composer analyze-md` Run PHPMD checks.

## License

MIT License. See [LICENSE](LICENSE).