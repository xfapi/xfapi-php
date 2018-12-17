<?php

namespace XFApi\Exception\RequestException;

use XFApi\Exception\XFApiException;

/**
 * Class AbstractRequestException
 * @package XFApi\Exception\RequestException
 */
abstract class AbstractRequestException extends XFApiException
{
    protected $body;
    protected $errors;

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->body ?: [];
    }

    /**
     * @param array $body
     */
    public function setBody(array $body)
    {
        $this->body = $body;

        if (isset($body['errors'])) {
            $this->setErrors($body['errors']);
        }
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors ?: [];
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        $messages = [];
        foreach ($errors as $error) {
            $messages[] = $error['message'];
        }

        $messagesStr = implode(' | ', $messages);
        $this->message = $messagesStr;
    }
}
