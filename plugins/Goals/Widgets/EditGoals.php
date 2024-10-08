<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Goals\Widgets;

use Piwik\API\Request;
use Piwik\Common;
use Piwik\Widget\WidgetConfig;

class EditGoals extends \Piwik\Widget\Widget
{
    public static function configure(WidgetConfig $config)
    {
        $idSite = Common::getRequestVar('idSite', 0, 'int');

        $config->setCategoryId('Goals_Goals');
        $config->setSubcategoryId('Goals_ManageGoals');
        $config->setIsNotWidgetizable();

        if (empty($idSite)) {
            $config->disable();
            return;
        }

        $goals  = Request::processRequest('Goals.getGoals', ['idSite' => $idSite, 'filter_limit' => '-1'], $default = []);

        $config->setName('Goals_ManageGoals');

        if (count($goals) === 0) {
            $config->disable();
        }
    }
}
