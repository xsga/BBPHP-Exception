<?php

declare(strict_types=1);

namespace Xsga\BBPHP\Exception;

use Exception;
use Throwable;

class GenericException extends Exception
{
    /** @param string[] $params */
    public function __construct(
        string $message = '',
        int $code = 0,
        protected array $params = [],
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    /** @return string[] */
    final public function getParams(): array
    {
        return $this->params;
    }
}
