<?php

/*
 * This file is part of the JasonMann1993/flysystem-aliyun-oss.
 *
 * (c) jasonmann <793650314@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jasonmann\Flysystem\Aliyun\Traits;

trait SignatureTrait
{
    /**
     * gmt.
     *
     * @param $time
     *
     * @return string
     *
     * @throws \Exception
     */
    public function gmt_iso8601($time)
    {
        // fix bug https://connect.console.aliyun.com/connect/detail/162632
        return (new \DateTime(null, new \DateTimeZone('UTC')))->setTimestamp($time)->format('Y-m-d\TH:i:s\Z');
    }
}
