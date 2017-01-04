<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @see       http://github.com/zendframework/zend-diactoros for the canonical source repository
 * @copyright Copyright (c) 2015-2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-diactoros/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Diactoros\Request;

use Psr\Http\Message\RequestInterface;

/**
 * Serialize or deserialize messages.
 *
 * This class provides functionality for serializing a RequestInterface instance
 * to an array, as well as the reverse operation of creating a Request instance
 * from an array representing a message.
 */
final class ArraySerializer
{
    /**
     * Serialize a request message to an array.
     *
     * @param RequestInterface $request
     * @return array
     */
    public static function toArray(RequestInterface $request)
    {
        return [
            'method' => $request->getMethod(),
            'request_target' => $request->getRequestTarget(),
            'uri' => (string) $request->getUri(),
            'protocol_version' => $request->getProtocolVersion(),
            'headers' => $request->getHeaders(),
            'body' => (string) $request->getBody(),
        ];
    }
}
