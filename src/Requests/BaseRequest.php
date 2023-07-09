<?php

/*
 * This file is part of the "cashier-provider/cash" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 *
 * @copyright 2021 Andrey Helldar
 *
 * @license MIT
 *
 * @see https://github.com/cashier-provider/cash
 */

declare(strict_types=1);

namespace Cash\src\Requests;

use CashierProvider\Core\Http\Request;

abstract class BaseRequest extends Request
{
    public function getRawHeaders(): array
    {
        return [];
    }
}
