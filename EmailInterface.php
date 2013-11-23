<?php
/**
 * Email Interface
 *
 * @package    Email
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\Email;

/**
 * Email Interface
 *
 * @package    Email
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface EmailInterface
{
    /**
     * Return parameter value or default
     *
     * @param   string      $key
     * @param   null|string $default
     *
     * @return  mixed
     * @since   1.0
     */
    public function get($key, $default = null);

    /**
     * Set parameter value
     *
     * @param   string     $key
     * @param   null|mixed $value
     *
     * @return  mixed
     * @since   1.0
     */
    public function set($key, $value = null);

    /**
     * Send Email
     *
     * @return  mixed
     * @since   1.0
     */
    public function send();
}
