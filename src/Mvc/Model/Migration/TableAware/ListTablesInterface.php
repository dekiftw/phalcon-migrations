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

namespace Phalcon\Migrations\Mvc\Model\Migration\TableAware;

use DirectoryIterator;

interface ListTablesInterface
{
    /**
     * Get list table from prefix
     *
     * @param string $tablePrefix Table prefix
     * @param DirectoryIterator $iterator
     * @return string
     */
    public function listTablesForPrefix($tablePrefix, DirectoryIterator $iterator = null);
}
