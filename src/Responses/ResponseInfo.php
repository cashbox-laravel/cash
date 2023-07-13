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
 * @see https://github.com/cashbox-laravel/foundation
 */

declare(strict_types=1);

namespace Cashbox\Cash\Responses;

use Cashbox\Core\Http\ResponseInfo as BaseData;

class ResponseInfo extends BaseData
{
    public ?int $status = null;

    public int|string $paymentId;

    public function getExternalId(): ?string
    {
        return null;
    }

    public function getOperationId(): ?string
    {
        return null;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
