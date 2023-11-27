<?php

/**
 * This is part of the http-utils package
 *
 * php version 8.2.3
 *
 * @package    Http
 * @subpackage Utils
 * @category   HttpServerError
 * @license    https://opensource.org/license/mit/  MIT License
 * @copyright  Copyright (c) 2023, Vidda
 * @author     Vidda <vidda@ascetik.fr>
 */

declare(strict_types=1);

namespace Ascetik\Http\Utils\Exceptions\Server;

use Ascetik\Http\Utils\Types\HttpServerError;

class InternalServerError extends HttpServerError
{
    public function __construct()
    {
        $this->message = 'Internal Server Error';
        $this->code = 500;
    }
}
