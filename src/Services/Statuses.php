<?php

/**
 * This file is part of the "cashbox/foundation" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2023 Andrey Helldar
 * @license MIT
 *
 * @see https://cashbox.city
 */

declare(strict_types=1);

namespace Cashbox\Cash\Services;

use Cashbox\Core\Services\Statuses as BaseStatuses;

class Statuses extends BaseStatuses
{
    public const FAILED    = ['FAILED'];
    public const NEW       = ['NEW'];
    public const REFUNDED  = ['REFUNDED'];
    public const REFUNDING = ['REFUNDING'];
    public const SUCCESS   = ['PAID'];
}
