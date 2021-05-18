<?php
declare(strict_types=1);

namespace GameQ\Protocols;

class Valheim extends Source {
    /**
     * String name of this protocol class
     *
     * @type string
     */
    protected string $name = 'valheim';

    /**
     * Longer string name of this protocol class
     *
     * @type string
     */
    protected string $name_long = "Valheim";

    /**
     * query_port = client_port + 1
     *
     * @type int
     */
    protected int $port_diff = 1;
}