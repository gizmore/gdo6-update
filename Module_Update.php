<?php
namespace GDO\Update;
use GDO\Core\GDO_Module;
use GDO\UI\GDT_Bar;
use GDO\UI\GDT_Link;
/**
 * Manage followers.
 * This module does not use any templates at all.
 * If you need changes do a pull request for hooks and config.
 * 
 * @author gizmore
 * @since 6.07
 * @version 6.07
 */
final class Module_Update extends GDO_Module
{
	##############
	### Module ###
	##############
	public function getClasses()
	{
		return array(
		);
	}

	#############
	### Hooks ###
	#############
	public function hookAdminBar(GDT_Bar $bar)
	{
		$bar->addField(GDT_Link::make('link_update')->href(href('Update', 'Overview')));
	}
	
}
