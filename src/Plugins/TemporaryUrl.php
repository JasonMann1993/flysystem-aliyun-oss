<?php

namespace Jasonmann\Flysystem\Aliyun\Plugins;

use League\Flysystem\Plugin\AbstractPlugin;
use OSS\OssClient;

class TemporaryUrl extends AbstractPlugin
{

    public function getMethod()
    {
        return 'getTemporaryUrl';
    }

    public function handle($path, $expiration, array $options = [], $method = OssClient::OSS_HTTP_GET)
    {
        return $this->filesystem->getAdapter()->getTemporaryUrl($path, $expiration, $options, $method);
    }
}
