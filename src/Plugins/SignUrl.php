<?php

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
