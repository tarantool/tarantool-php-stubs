<?php

/**
 * This is a stub file of tarantool-php extension for various PHP IDEs
 */
class Tarantool
{
    /**
     * @param string|null $host Default to 'localhost'.
     * @param int|null    $port Default to 3301.
     */
    public function __construct($host = null, $port = null)
    {
    }

    /**
     * @throws Exception
     */
    public function connect()
    {
    }

    /**
     * Closes connection to the server.
     */
    public function close()
    {
    }

    /**
     * Alias for close() method.
     *
     * @see Tarantool::close()
     */
    public function disconnect()
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
     * @param string|int      $space        Space number or name
     * @param array           $key          Key can be scalar or php array (may be empty)
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
     * @param string|int $space     Space number or name
     * @param array      $values
     *
     * @return array
     */
    public function insert($space, array $values)
    {
    }

    /**
     * @param string|int $space     Space number or name
     * @param array      $values
     *
     * @return array
     */
    public function replace($space, array $values)
    {
    }

    /**
     * @param string|int      $space        Space number or name
     * @param int             $key          Key can be scalar or php array (may be empty)
     * @param array           $operations
     * @param string|int|null $index
     *
     * <operations> ex.:
     * array(
     *   array(
     *     "field" => <number>,
     *     "op"    => ":",
     *     "offset"=> <number>,
     *     "length"=> <number>,
     *     "list"  => <string>
     *   ),
     *   array(
     *     "field" => <number>,
     *     "op" => ("+"|"-"|"&"|"^"|"#"),
     *     "arg" => <number>
     *   ),
     *   array(
     *     "field" => <number>,
     *     "op"    => ("="|"!"),
     *     "arg"   => <serializable>
     *   ),
     * )
     *
     * <serializable> - any simple type which converts to MsgPack (scalar/array).
     * ":" - command `splice` - replace "length" bites in "field" to "list" beginning from "offset".
     * "+" - add "arg" to "field"
     * "-" - sub "arg" from "field"
     * "&" - bitwise "OR" with "field" and "arg" and place result to "field"
     * "^" - bitwise "Exclusive OR" (XOR) with "field" and "arg" and place result to "field"
     * "=" - assign "arg" to "field"
     * "!" - assign "arg" before "field"
     * "#" - remove "arg" fields beginning from "field"
     *
     * @return array
     */
    public function update($space, $key, array $operations, $index = null)
    {
    }

    /**
     * @param string|int      $space Space number or name
     * @param array           $key
     * @param string|int|null $index
     *
     * @return array
     */
    public function delete($space, array $key, $index = null)
    {
    }

    /**
     * @param string     $functionName Stored procedure (function) name
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

    /**
     * Alias for flush_schema() method.
     *
     * @see Tarantool::flush_schema()
     */
    public function flushSchema()
    {
    }

    /**
     *
     */
    public function flush_schema()
    {
    }
}
