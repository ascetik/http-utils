<?php

/**
 * This is part of the http-utils package
 *
 * php version 8.2.3
 *
 * @package    Http
 * @subpackage Utils
 * @category   Server Error
 * @license    https://opensource.org/license/mit/  MIT License
 * @copyright  Copyright (c) 2023, Vidda
 * @author     Vidda <vidda@ascetik.fr>
 */

declare(strict_types=1);

namespace Ascetik\Http\Utils\Types;

use Error;

abstract class HttpServerError extends Error
{
}
