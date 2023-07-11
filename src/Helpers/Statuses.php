<?php

/**
 * This file is part of the "cashier-provider/foundation" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2023 Andrey Helldar
 * @license MIT
 *
 * @see https://github.com/cashier-provider/foundation
 */

namespace CashierProvider\Cash\Helpers;

use CashierProvider\Cash\Constants\Status;
use CashierProvider\Core\Services\Statuses as BaseStatus;

class Statuses extends BaseStatus
{
    public const REFUNDED = [
        Status::REFUNDED,
    ];
    public const SUCCESS = [
        Status::PAID,
    ];
}