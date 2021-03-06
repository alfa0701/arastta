<?php
/**
 * @package     Arastta eCommerce
 * @copyright   2015-2018 Arastta Association. All rights reserved.
 * @copyright   See CREDITS.txt for credits and other copyright notices.
 * @license     GNU GPL version 3; see LICENSE.txt
 * @link        https://arastta.org
 */

namespace Command;

class Up extends Command
{

    protected $name = 'up';

    protected $description = 'Take the store out of maintenance mode';

    public function fire()
    {
        $this->loadAdminModel('setting/setting');

        $this->admin->model_setting_setting->editSettingValue('config', 'config_maintenance', 0);

        $this->info('Maintenance mode disabled');
    }
}
