<?php

namespace Core;

class Response
{
    // Successfull responst
    const CREATED = 201;
    const ACCEPTED = 202;

    // Redirection response
    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;

    // Client error response
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const REQUEST_TIMEOUT = 408;
    const TOO_MANY_REQUEST = 429;

    // Server error response
    const INTERNAL_SERVER_ERROR = 500;
    const BAD_GATEWAY = 503;
    const HTTP_VERSION_NOT_SUPPORT = 505;
}
