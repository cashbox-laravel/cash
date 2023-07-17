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

namespace Cashbox\Cash\Http\Requests;

use Cashbox\Core\Http\Request;

class VerifyRequest extends Request
{
    public function body(): array
    {
        return [
            'status' => 'PAID',
        ];
    }

    public function url(): ?string
    {
        return null;
    }
}
