<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Migrations.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Phalcon\Migrations\Utils;

class Nullify
{
    public function __invoke($values)
    {
        $vals = array_map(
            function ($value) {
                if (function_exists('mb_strtolower')) {
                    return mb_strtolower($value);
                }
            },
            $values
        );

        foreach ($vals as $key => $value) {
            if ($value == 'null') {
                $values[$key] = null;
            }
        }

        return $values;
    }
}
