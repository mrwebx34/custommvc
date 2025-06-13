<?php
/*
 * 
 * 
 * @author: ranjan
 * @version: 1.0.0
 * @package: app\core
 * @subpackage: application
 * @copyright: 2025 ranjan
 * @license: MIT
 * @link: https://github.com/webx34
 * @since: 1.0.0
 * @deprecated: 1.0.0
 * @package: core
 */

namespace app\core;

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }
}
