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
use OSS\OssClient;

class SignUrl extends AbstractPlugin
{
    public function getMethod()
    {
        return 'signUrl';
    }

    public function handle($path, $timeout, array $options = [], $method = OssClient::OSS_HTTP_GET)
    {
        return $this->filesystem->getAdapter()->signUrl($path, $timeout, $options, $method);
    }
}
