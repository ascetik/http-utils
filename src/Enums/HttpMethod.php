<?php

/**
 * This is part of the http-utils package
 *
 * php version 8.2.3
 *
 * @package    Http
 * @subpackage Utils
 * @category   Enum
 * @license    https://opensource.org/license/mit/  MIT License
 * @copyright  Copyright (c) 2023, Vidda
 * @author     Vidda <vidda@ascetik.fr>
 */

declare(strict_types=1);

namespace Ascetik\Http\Utils\Enums;

use Ascetik\Http\Utils\Exceptions\Client\MethodNotAllowedException;


/**
 * Enumerate available request methods
 *
 * @todo  TODO : mettre ce machin dans un nouveau package http-utils
 * @version 0.1.0
 */
enum HttpMethod
{
    case GET;
    case POST;
    case PUT;
    case PATCH;
    case DELETE;
    case OPTIONS;

    public function is(string $method): bool
    {
        return $this === self::tryFrom($method);
    }

    /**
     * @throws MethodNotAllowedException
     *
     * @return self
     */
    public static function from(string $method): self
    {
        if ($self = self::tryFrom($method)) {
            return $self;
        }
        throw new MethodNotAllowedException($method . ' is not a valid name for enum Test');
    }

    public static function tryFrom(string $method): ?self
    {
        foreach (self::cases() as $case) {
            if ($case->name == strtoupper($method)) {
                return $case;
            }
        }
        return null;
    }

    public function equals(string $method): bool
    {
        return $this->name == strtoupper($method);
    }
}
