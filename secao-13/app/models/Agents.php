<?php

namespace bng\Models;

class Agents extends BaseModel
{
	public function get_total_agents()
	{
		$this->db_connect();
		return $this->query("SELECT COUNT(*) total FROM agents");
	}
}
