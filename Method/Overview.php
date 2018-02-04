<?php
namespace GDO\Update\Method;

use GDO\Core\Method;
use GDO\Core\MethodAdmin;
use GDO\Core\GDT_Response;

final class Overview extends Method
{
	use MethodAdmin;
	
	public function execute()
	{
		return $this->renderNavBar()->add($this->renderStatus());
	}
	
	private function renderStatus()
	{
		$response = GDT_Response::make();
		$output = []; $return = null;
		exec("./gdo_status.sh", $output, $return);
		foreach ($output as $line)
		{
			$response->addHTML($line);
		}
		return $response;
	}

	
}
