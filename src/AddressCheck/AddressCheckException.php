<?php

namespace XQueue\AddressCheck;

/**
 * An exception that is thrown when a technical error has occurred either in the communication
 * with AddressCheck's REST API or in the API itself.
 */
class AddressCheckException extends RuntimeException
{
    private $response;

    public function __construct($message = "", $response = false, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }

    /**
     *
     * @return \em false|string
     *  the HTTP response body if there was one, false otherwise
     */
    public function getResponse()
    {
        return $this->response;
    }
}
