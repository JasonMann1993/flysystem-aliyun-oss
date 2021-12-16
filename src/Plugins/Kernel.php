<?php

/*
 * This file is part of the JasonMann1993/flysystem-aliyun-oss.
 *
 * (c) jasonmann <793650314@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
