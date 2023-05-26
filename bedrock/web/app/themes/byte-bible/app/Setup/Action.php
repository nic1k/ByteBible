<?php

namespace app\Setup;

abstract class Action
{
    protected string $hook_name = '';
    protected int $priority = 10;
    protected int $accepted_args=1;

    protected abstract function callback();
}
