<?php

namespace Jasonmann\Flysystem\Aliyun\Plugins;

use League\Flysystem\Plugin\AbstractPlugin;

class Kernel extends AbstractPlugin
{

    public function getMethod()
    {
        return 'kernel';
    }

    public function handle()
    {
        return $this->filesystem->getAdapter()->getClient();
    }
}
