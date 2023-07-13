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
 * @see https://github.com/cashbox/foundation
 */

namespace CashierProvider\Cash;

use CashierProvider\Cash\Exceptions\Exception;
use CashierProvider\Cash\Requests\CreateRequest;
use CashierProvider\Cash\Requests\RefundRequest;
use CashierProvider\Cash\Requests\VerifyRequest;
use CashierProvider\Cash\Responses\ResponseInfo;
use CashierProvider\Cash\Services\Statuses;
use CashierProvider\Core\Http\ResponseInfo as BaseInfoData;
use CashierProvider\Core\Services\Driver as BaseDriver;

class Driver extends BaseDriver
{
    protected string $statuses = Statuses::class;

    protected string $exception = Exception::class;

    protected string $info = ResponseInfo::class;

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
