<?php
/**
 * @package Newscoop
 * @author Rafał Muszyński <rafal.muszynski@sourcefabric.org>
 * @copyright 2014 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Newscoop\EventDispatcher\Events;

use Symfony\Component\EventDispatcher\GenericEvent as SymfonyGenericEvent;

/**
 * Collect permissions from plugins
 */
class PluginPermissionsEvent extends SymfonyGenericEvent
{
    /**
	 * Plugin permissions array
     *
	 * @var array
	 */
    public $permissions = array();

    /**
     * Register permissions
     *
     * @param  string $name        Plugin name
     * @param  array  $permissions Permissions array
     */
    public function registerPermissions($name, array $permissions)
    {
        $this->permissions[$name] = $permissions;
    }

    /**
     * Get all plugin permissions
     *
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
}
