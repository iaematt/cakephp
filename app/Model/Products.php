<?php
App::uses('AppModel', 'Model');

class Product extends AppModel {

	public $validate = array(
		'title' => array(
			'rule' => array(
				'notEmpty'
			),
			'message' => 'Title is required'
		),
		'ref' => array(
			'rule' => array(
				'numeric'
			),
			'message' => 'Only numbers here'
		)
	);

}
