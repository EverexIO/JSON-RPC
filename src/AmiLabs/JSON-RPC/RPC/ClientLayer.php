<?php
/**
 * @package AmiLabs/JSON-RPC/RPC
 */

namespace AmiLabs\JSON-RPC\RPC;

/**
 * Remote Procedure Call client layer abstract class.
 *
 * @package AmiLabs/JSON-RPC/RPC
 * @author  deepeloper ({@see https://github.com/deepeloper})
 */
abstract class ClientLayer extends Layer
{
    /**
     * Remote service transport object
     *
     * @var mixed
     */
    protected $transport;

    public function __destruct()
    {
        $this->close();
    }

    /**
     * Patches response.
     *
     * @param  string &$response
     * @return void
     */
    abstract protected function patchResponse(&$response);

    /**
     * Validates response.
     *
     * @param  string &$response
     * @return void
     */
    abstract protected function validateResponse($response);
}
