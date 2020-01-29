<?php

declare(strict_types=1);

namespace Altek\Accountant\Events;

use Altek\Accountant\Contracts\LedgerDriver;
use Altek\Accountant\Contracts\Recordable;

class Recording
{
    /**
     * The Recordable model.
     *
     * @var \Altek\Accountant\Contracts\Recordable
     */
    public $model;

    /**
     * Ledger driver.
     *
     * @var \Altek\Accountant\Contracts\LedgerDriver
     */
    public $driver;

    /**
     * Create a new Recording event instance.
     *
     * @param \Altek\Accountant\Contracts\Recordable   $model
     * @param \Altek\Accountant\Contracts\LedgerDriver $driver
     */
    public function __construct(Recordable $model, LedgerDriver $driver)
    {
        $this->model  = $model;
        $this->driver = $driver;
    }
}
