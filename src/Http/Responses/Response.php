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

namespace Cashbox\Cash\Http\Responses;

use Cashbox\Core\Concerns\Helpers\Identifiers;
use Cashbox\Core\Http\Response as BaseData;

class Response extends BaseData
{
    use Identifiers;

    public ?string $status;

    public int|string $paymentId;

    public function getExternalId(): ?string
    {
        return $this->paymentId;
    }

    public function getOperationId(): ?string
    {
        return static::uuid();
    }
}
