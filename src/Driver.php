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

namespace Cashbox\Cash;

use Cashbox\Cash\Http\Requests\CreateRequest;
use Cashbox\Cash\Http\Requests\RefundRequest;
use Cashbox\Cash\Http\Requests\VerifyRequest;
use Cashbox\Cash\Http\Responses\Response;
use Cashbox\Cash\Services\Exception;
use Cashbox\Cash\Services\Statuses;
use Cashbox\Core\Http\Response as BaseInfoData;
use Cashbox\Core\Services\Driver as BaseDriver;

class Driver extends BaseDriver
{
    protected string $statuses = Statuses::class;

    protected string $exception = Exception::class;

    protected string $response = Response::class;

    public function start(): BaseInfoData
    {
        return $this->request(CreateRequest::class);
    }

    public function refund(): BaseInfoData
    {
        return $this->request(RefundRequest::class);
    }

    public function verify(): BaseInfoData
    {
        return $this->request(VerifyRequest::class);
    }
}
