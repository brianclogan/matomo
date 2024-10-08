<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Referrers\Columns;

use Piwik\Columns\Dimension;

class Referrer extends Dimension
{
    protected $type = self::TYPE_TEXT;
    protected $nameSingular = 'Referrers_Referrer';
}
