<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method string getMidasSecretId() 获取由平台客服提供的计费密钥Id
 * @method void setMidasSecretId(string $MidasSecretId) 设置由平台客服提供的计费密钥Id
 * @method string getMidasSignature() 获取计费签名
 * @method void setMidasSignature(string $MidasSignature) 设置计费签名
 * @method string getPlatformId() 获取平台参数，沙箱环境传sandbox，生产环境传release，默认release
 * @method void setPlatformId(string $PlatformId) 设置平台参数，沙箱环境传sandbox，生产环境传release，默认release
 */

/**
 *QueryAcctBinding请求参数结构体
 */
class QueryAcctBindingRequest extends AbstractModel
{
    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var string 由平台客服提供的计费密钥Id
     */
    public $MidasSecretId;

    /**
     * @var string 计费签名
     */
    public $MidasSignature;

    /**
     * @var string 平台参数，沙箱环境传sandbox，生产环境传release，默认release
     */
    public $PlatformId;
    /**
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param string $MidasSecretId 由平台客服提供的计费密钥Id
     * @param string $MidasSignature 计费签名
     * @param string $PlatformId 平台参数，沙箱环境传sandbox，生产环境传release，默认release
     */
    function __construct()
    {

    }
    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}