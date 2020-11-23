<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Auth',
		'Session'
	);

	public $helpers = array(
		'Session',
		'Form'
	);

	public function initialize() {
		parent::initialize();
		$this->loadComponent('Flash');
	}

	function beforeFilter() {

		// LOCALE
		$locale = Configure::read('Config.language');
		if ($locale && file_exists(APP . 'View' . DS . $locale . DS . $this->viewPath . DS . $this->view . $this->ext)) {
			// e.g. use /app/View/fra/Pages/tos.ctp instead of /app/View/Pages/tos.ctp
			$this->viewPath = $locale . DS . $this->viewPath;
		}

		// AUTH
		$this->Auth->authenticate = array(
			AuthComponent::ALL => array(
				'UserModel' => 'User',
				'fields' => array(
					'username' => 'email',
					'password' => 'password'
				)
			),
			'Form'
		);

		$this->Auth->authorize = 'Controller';

		$this->Auth->loginAction = array(
			'plugin' => null,
			'controller' => 'users',
			'action' => 'login'
		);

		$this->Auth->logoutRedirect = array(
			'plugin' => null,
			'controller' => 'users',
			'action' => 'login'
		);

		$this->Auth->loginRedirect = array(
			'plugin' => null,
			'controller' => 'pages',
			'action' => 'home'
		);

		$this->Auth->error = __('Ops! You are not logged in.');

		// $this->Auth->allowedActions = array('add', 'resetpassword');
	}

	public function isAuthorized($user) {
		if(!empty($this->request->params['admin'])) {
			return $user['role_id'] == 1;
		}

		return !empty($user);
	}
}
