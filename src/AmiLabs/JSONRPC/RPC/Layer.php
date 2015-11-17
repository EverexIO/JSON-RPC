<?php
/**
 * @package AmiLabs/JSONRPC/RPC
 */

namespace AmiLabs\JSONRPC\RPC;

use AmiLabs\JSONRPC\Core\Logger;

/**
 * Remote Procedure Call layer abstract class,
 * see {@see AmiLabs\JSONRPC\RPC}, {@see AmiLabs\JSONRPC\RPC\Client\JSON}.
 *
 * @package AmiLabs/JSONRPC/RPC
 * @author  deepeloper ({@see https://github.com/deepeloper})
 */
abstract class Layer
{
    /**
     * Layer options
     *
     * @var array
     */
    protected $options;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @param array  $options  Layer options
     */
    public function __construct(array $options = array())
    {
        $this->options = $options + $this->getDefaultOptions();
        $this->logger = new Logger(
            isset($this->options['AmiLabs\\Logger'])
                ? $this->options['AmiLabs\\Logger']
                : array()
        );
        unset($this->options['AmiLabs\\Logger']);
    }

    /**
     * Returns default options.
     *
     * @return array
     */
    abstract protected function getDefaultOptions();
}
