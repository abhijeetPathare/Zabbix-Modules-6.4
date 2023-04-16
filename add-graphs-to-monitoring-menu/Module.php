<?php declare(strict_types = 1);
 
namespace Modules\AddGraphsToMonitoringMenu;

 
use APP;
 
class Module extends \Zabbix\Core\CModule {
        public function init(): void {
                // Initialize main menu (CMenu class instance).
                APP::Component()->get('menu.main')
                        ->findOrAdd(_('Monitoring'))
                                ->getSubmenu()
                                        ->insertAfter('Hosts', (new \CMenuItem(_('Graphs')))
                                                ->setAction('charts.view')
                                        );
        }
}
?>
