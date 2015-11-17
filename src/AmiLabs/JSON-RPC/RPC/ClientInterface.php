<?php
/**
 * @package AmiLabs/JSON-RPC/RPC
 */

namespace AmiLabs\JSON-RPC\RPC;

/**
 * Remote Procedure Call client layer interface,
 * see {@see AmiLabs\JSON-RPC\RPC}, {@see AmiLabs\JSON-RPC\RPC\Client\JSON}.
 *
 * @package AmiLabs/JSON-RPC/RPC
 * @author  deepeloper ({@see https://github.com/deepeloper})
 */
interface ClientInterface
{
    /**
     * Opens connection to remote service.
     *
     * @param  string $url
     * @return void
     */
    public function open($url);

    /**
     * Executes remote server method.
     *
     * @param  string  $method
     * @param  array   $params
     * @param  array   $options
     * @param  bool    $resetOptions  Flag specifying to reset previous options
     * @param  string  $url           Cusrom URL if differs from initialized
     * @return mixed
     */
    public function execute(
        $method,
        array $params = NULL,
        array $options = array(),
        $resetOptions = FALSE,
        $url = ''
    );

    /**
     * Executes remote server batch.
     *
     * @param  array   $batch         Array containing arrays:
     *                                [
     *                                    'method' => ...(,
     *                                    'params' => array(,,,))
     *                                ]
     * @param  array   $options
     * @param  bool    $resetOptions  Flag specifying to reset previous options
     * @param  string  $url           Cusrom URL if differs from initialized
     * @return mixed
     */
    public function executeBatch(
        array $batch,
        array $options = array(),
        $resetOptions = FALSE,
        $url = ''
    );

    /**
     * Closes connection to remote service.
     *
     * @return void
     */
    public function close();
}
