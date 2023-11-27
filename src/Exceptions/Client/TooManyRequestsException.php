<?php

namespace Ascetik\Http\Utils\Exceptions\Client;

use Ascetik\Http\Utils\Types\HttpClientException;

class TooManyRequestsException extends HttpClientException
{
    public function __construct()
    {
        parent::__construct('Too Many Requests', 429);
    }
}
