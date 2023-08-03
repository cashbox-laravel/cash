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

namespace Cashbox\Cash\Http\Responses;

use Cashbox\Core\Concerns\Helpers\Identifiers;
use Cashbox\Core\Data\Models\InfoData;
use Cashbox\Core\Http\Response as BaseData;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class Response extends BaseData
{
    use Identifiers;

    public ?string $status;

    public function getOperationId(): ?string
    {
        return static::uuid();
    }

    public function getInfo(): InfoData
    {
        return InfoData::from([
            'externalId'  => $this->getExternalId(),
            'operationId' => $this->getOperationId(),
            'status'      => $this->getStatus(),
            'extra'       => $this->getExtra(),
        ]);
    }

    protected function getStatus(): ?string
    {
        return $this->status;
    }
}
