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

namespace Cash\src;

use Cash\src\Helpers\Statuses;
use Cash\src\Requests\Cancel;
use Cash\src\Requests\Create;
use Cash\src\Requests\Status;
use Cash\src\Resources\Details;
use Cash\src\Responses\Created;
use Cash\src\Responses\Refund;
use Cash\src\Responses\State;
use CashierProvider\Core\Services\Driver as BaseDriver;
use Helldar\Contracts\Cashier\Http\Request as RequestResource;
use Helldar\Contracts\Cashier\Http\Response;

class Driver extends BaseDriver
{
    protected $statuses = Statuses::class;

    protected $details = Details::class;

    public function start(): Response
    {
        $request = Create::make($this->model);

        return $this->request($request, Created::class);
    }

    public function check(): Response
    {
        $request = Status::make($this->model);

        return $this->request($request, State::class);
    }

    public function refund(): Response
    {
        $request = Cancel::make($this->model);

        return $this->request($request, Refund::class);
    }

    /**
     * @param  \Helldar\Contracts\Cashier\Http\Request  $request
     * @param  \Helldar\Contracts\Cashier\Http\Response|string  $response
     *
     * @return \Helldar\Contracts\Cashier\Http\Response
     */
    protected function request(RequestResource $request, string $response): Response
    {
        $content = $request->body();

        return $response::make($content);
    }
}
