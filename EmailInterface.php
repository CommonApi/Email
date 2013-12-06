<?php
/**
 * Email Interface
 *
 * @package    Email
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Email;

/**
 * Email Interface
 *
 * @package    Email
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface EmailInterface
{
    /**
     * Send Email
     *
     * @return  mixed
     * @since   0.1
     */
    public function send();
}
