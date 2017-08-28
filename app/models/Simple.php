<?php

class Simple extends \Phalcon\Mvc\Model {

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->setSchema("storage_database_sql");
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'simple';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Simple[]|Simple
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Simple
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

}
