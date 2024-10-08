<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Actions\Columns;

use Piwik\Columns\Dimension;

class DestinationPage extends Dimension
{
    protected $type = self::TYPE_TEXT;
    protected $nameSingular = 'General_ColumnDestinationPage';
}
