<?php
	/**
	 * Elgg satistics sub-component on the main menu.
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */
?>
<div class="admin-menu-option">
	<h2><?php echo elgg_echo('usersettings:statistics'); ?> </h2>
	<p><?php echo elgg_echo('usersettings:statistics:opt:description'); ?><br />
	<a href="<?php echo $CONFIG->wwwroot . "pg/usersettings/statistics/"; ?>"><?php echo elgg_echo('usersettings:statistics:opt:linktext'); ?></a></p>
</div>
