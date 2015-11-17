<?php
/**
 * @package AmiLabs/JSONRPC/RPC
 */

namespace AmiLabs\JSONRPC\RPC;

/**
 * Remote Procedure Call server layer interface,
 * see {@see AmiLabs\JSONRPC\RPC}, {@see AmiLabs\JSONRPC\RPC\Server\JSON}.
 *
 * @package AmiLabs/JSONRPC/RPC
 * @author  deepeloper ({@see https://github.com/deepeloper})
 */
interface ServerInterface
{
    /**
     * Method and callback binding.
     *
     * @param  string   $method
     * @param  callback $callback
     * @return void
     */
    public function bind($method, $callback);

    /**
     * Authenticates users by login/password pairs.
     *
     * @param  array $users
     * @return void
     */
    public function authenticateUsers(array $users);

    /**
     * IP based client restrictions.
     *
     * @param  array $hosts  Array of host IPs
     * @return void
     */
    public function restrictByIPs(array $hosts);

    /**
     * Processes request and returns response.
     *
     * @return mixed
     */
    public function execute(array $options = array(), $resetOptions = FALSE);

    /**
     * Returns passed request.
     *
     * @return mixed
     */
    public function getRequest();
}
