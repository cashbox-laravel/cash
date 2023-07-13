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

namespace Tests\Requests;

use CashierProvider\Cash\Requests\Status;
use CashierProvider\Core\Http\Request;
use DragonCode\Contracts\Cashier\Http\Request as RequestContract;
use Tests\TestCase;

class StatusTest extends TestCase
{
    public function testInstance()
    {
        $request = $this->request(Status::class);

        $this->assertInstanceOf(Status::class, $request);
        $this->assertInstanceOf(Request::class, $request);
        $this->assertInstanceOf(RequestContract::class, $request);
    }

    public function testBody()
    {
        $request = $this->request(Status::class);

        $this->assertIsArray($request->body());

        $this->assertSame([
            'PaymentId' => self::PAYMENT_EXTERNAL_ID,

            'Status' => null,
        ], $request->body());
    }

    public function testGetRawBody()
    {
        $request = $this->request(Status::class);

        $this->assertIsArray($request->getRawBody());

        $this->assertSame([
            'PaymentId' => self::PAYMENT_EXTERNAL_ID,

            'Status' => null,
        ], $request->body());
    }
}
