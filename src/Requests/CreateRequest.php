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

declare(strict_types=1);

namespace CashierProvider\Cash\Requests;

use CashierProvider\Core\Http\Request;

class CreateRequest extends Request
{
    public function body(): array
    {
        return [
            'paymentId' => $this->payment->getKey(),

            'status' => 'NEW',
        ];
    }

    public function headers(): array
    {
        return [];
    }

    public function uri(): ?string
    {
        return null;
    }
}
