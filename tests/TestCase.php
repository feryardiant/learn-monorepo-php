<?php

namespace LearnMonorepo\Tests;

use Orchestra\Testbench\Concerns\WithWorkbench;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use WithTestHelper;
    use WithWorkbench;
}
