<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->extensions(['json','xml']);
    $routes->resources('Api');
    $routes->connect('/', ['controller' => 'Index', 'action' => 'view']);

    $routes->fallbacks(DashedRoute::class);
    $routes->connect('/classement', ['controller' => 'Accounts', 'action' => 'classement']);
    $routes->connect('/competitions', ['controller' => 'Accounts', 'action' => 'competitions']);
    $routes->connect('/objetsco', ['controller' => 'Accounts', 'action' => 'objetsco']);
    $routes->connect('/localisation', ['controller' => 'Accounts', 'action' => 'localisation']);
    $routes->connect('/seances', ['controller' => 'Accounts', 'action' => 'seances']);
    $routes->connect('/profil', ['controller' => 'Accounts', 'action' => 'profil']);

    $routes->connect('/login', ['controller' => 'Members', 'action' => 'login']);
    $routes->connect('/add', ['controller' => 'Members', 'action' => 'add']);
    $routes->connect('/forgot', ['controller' => 'Members', 'action' => 'forgot']);
});

Router::scope('/accounts', function (RouteBuilder $routes){
	$routes->connect('/profil/edit', ['controller' => 'Accounts', 'action' => 'edit']);
});

Plugin::routes();
