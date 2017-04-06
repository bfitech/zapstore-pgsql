<?php


namespace BFITech\ZapStore;


class PgSQL extends SQL {

	public function __construct($params, $logger=null) {
		$params['dbtype'] = 'pgsql';
		parent::__construct($params, $logger);
	}

}

