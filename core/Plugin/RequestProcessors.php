<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugin;

use Piwik\Container\StaticContainer;

class RequestProcessors
{
    public function getRequestProcessors()
    {
        $manager    = Manager::getInstance();
        $processors = $manager->findMultipleComponents('Tracker', 'Piwik\\Tracker\\RequestProcessor');

        $instances = array();
        foreach ($processors as $processor) {
            $instances[] = StaticContainer::get($processor);
        }

        return $instances;
    }
}
