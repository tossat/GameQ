<?php
declare(strict_types=1);

namespace GameQ\Protocols;
/**
 * Class Valheim
 * @package GameQ\Protocols
 */
class Valheim extends Source {
    /**
     * String name of this protocol class
     *
     * @type string
     */
    protected $name = 'valheim';

    /**
     * Longer string name of this protocol class
     *
     * @type string
     */
    protected $name_long = "Valheim";

    /**
     * query_port = client_port + 1
     *
     * @type int
     */
    protected $port_diff = 1;
}