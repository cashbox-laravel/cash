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

namespace Tests\Requests;

use CashierProvider\Cash\Requests\CreateRequest;
use CashierProvider\Core\Http\Request;
use DragonCode\Contracts\Cashier\Http\Request as RequestContract;
use Tests\TestCase;

class InitTest extends TestCase
{
    public function testInstance()
    {
        $request = $this->request(CreateRequest::class);

        $this->assertInstanceOf(CreateRequest::class, $request);
        $this->assertInstanceOf(Request::class, $request);
        $this->assertInstanceOf(RequestContract::class, $request);
    }

    public function testBody()
    {
        $request = $this->request(CreateRequest::class);

        $this->assertIsArray($request->body());

        $this->assertSame([
            'PaymentId' => self::PAYMENT_EXTERNAL_ID,
            'Status'    => self::STATUS,
        ], $request->body());
    }

    public function testGetRawBody()
    {
        $request = $this->request(CreateRequest::class);

        $this->assertIsArray($request->getRawBody());

        $this->assertSame([
            'PaymentId' => self::PAYMENT_EXTERNAL_ID,
            'Status'    => self::STATUS,
        ], $request->body());
    }
}
