<?php

namespace Jasonmann\Flysystem\Aliyun\Plugins;

use League\Flysystem\Plugin\AbstractPlugin;

class SignatureConfig extends AbstractPlugin
{

    public function getMethod()
    {
        return 'signatureConfig';
    }

    public function handle($prefix = '', $callBackUrl = null, $customData = [], $expire = 30, $contentLengthRangeValue = 1048576000, $systemData = [])
    {
        return $this->filesystem->getAdapter()->signatureConfig($prefix, $callBackUrl, $customData, $expire, $contentLengthRangeValue, $systemData);
    }
}
