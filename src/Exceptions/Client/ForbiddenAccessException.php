<?php

/**
 * This is part of the http-utils package
 *
 * php version 8.2.3
 *
 * @package    Http
 * @subpackage Utils
 * @category   HttpClientException
 * @license    https://opensource.org/license/mit/  MIT License
 * @copyright  Copyright (c) 2023, Vidda
 * @author     Vidda <vidda@ascetik.fr>
 */

declare(strict_types=1);

namespace Core\Exceptions\Http;

use Ascetik\Http\Utils\Types\HttpClientException;

class ForbiddenAccessException extends HttpClientException
{
    public function __construct(string $message = 'Forbidden')
    {
        parent::__construct($message, 403);
    }
}
