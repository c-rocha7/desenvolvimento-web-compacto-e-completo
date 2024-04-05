<?php 

namespace bng\Controllers;

use bng\Controllers\BaseController;
use bng\Models\AdminModel;

class Admin extends BaseController
{
	// =======================================================
	public function all_clients()
	{
		// check if session has a user with admin profile
		if (!check_session() || $_SESSION['user']->profile != 'admin') {
			header('Location: index.php?ct=main&mt=index');
		}

		// get all clients from all agents
		$model = new AdminModel();
		$results = $model->get_all_clients();

		printData($results);
	}
}
