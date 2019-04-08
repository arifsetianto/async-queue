<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\AsyncQueue;

interface MessageInterface
{
    public function job(): JobInterface;

    /**
     * Whether the queue can be handle again.
     */
    public function attempts(): bool;
}
