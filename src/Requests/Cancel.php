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

use CashierProvider\Cash\Constants\Status as StatusConst;

class Cancel extends BaseRequest
{
    public function getRawBody(): array
    {
        return [
            'PaymentId' => $this->model->getExternalId(),

            'Status' => $this->status(),
        ];
    }

    protected function status(): string
    {
        return StatusConst::REFUNDED;
    }
}
