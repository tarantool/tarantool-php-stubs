<?php

class Tarantool
{
    /**
     * @param string|null $host Default to 'localhost'.
     * @param int|null    $port Default to 3301.
     */
    public function __construct($host = null, $port = null)
    {
    }

    public function connect()
    {
    }

    public function close()
    {
    }

    /**
     * @param string $username
     * @param string $password
     */
    public function authenticate($username, $password)
    {
    }

    /**
     * @return bool
     */
    public function ping()
    {
    }

    /**
     * @param string|int      $space
     * @param array           $key
     * @param string|int|null $index
     * @param int|null        $limit
     * @param int|null        $offset
     * @param int|null        $iteratorType
     *
     * @return array
     */
    public function select($space, array $key = null, $index = null, $limit = null, $offset = null, $iteratorType = null)
    {
    }

    /**
     * @param string|int $space
     * @param array      $values
     *
     * @return array
     */
    public function insert($space, array $values)
    {
    }

    /**
     * @param string|int $space
     * @param array      $values
     *
     * @return array
     */
    public function replace($space, array $values)
    {
    }

    /**
     * @param string|int      $space
     * @param int             $key
     * @param array           $operations
     * @param string|int|null $index
     *
     * @return array
     */
    public function update($space, $key, array $operations, $index = null)
    {
    }

    /**
     * @param string|int      $space
     * @param array           $key
     * @param string|int|null $index
     *
     * @return array
     */
    public function delete($space, array $key, $index = null)
    {
    }

    /**
     * @param string     $functionName
     * @param array|null $args
     *
     * @return array
     */
    public function call($functionName, array $args = null)
    {
    }

    /**
     * @param string     $expr
     * @param array|null $args
     *
     * @return array
     */
    public function evaluate($expr, array $args = null)
    {
    }

    public function flushSchema()
    {
    }

    public function flush_schema()
    {
    }
}
