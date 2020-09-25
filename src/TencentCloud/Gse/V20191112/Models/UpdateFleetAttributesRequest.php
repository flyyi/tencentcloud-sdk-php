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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFleetAttributes请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队 Id
 * @method void setFleetId(string $FleetId) 设置服务器舰队 Id
 * @method string getDescription() 获取服务器舰队描述
 * @method void setDescription(string $Description) 设置服务器舰队描述
 * @method string getName() 获取服务器舰队名称
 * @method void setName(string $Name) 设置服务器舰队名称
 * @method string getNewGameSessionProtectionPolicy() 获取新建游戏会话保护策略
 * @method void setNewGameSessionProtectionPolicy(string $NewGameSessionProtectionPolicy) 设置新建游戏会话保护策略
 * @method ResourceCreationLimitPolicy getResourceCreationLimitPolicy() 获取资源创建限制策略
 * @method void setResourceCreationLimitPolicy(ResourceCreationLimitPolicy $ResourceCreationLimitPolicy) 设置资源创建限制策略
 * @method integer getGameServerSessionProtectionTimeLimit() 获取时限保护超时时间，默认60分钟
 * @method void setGameServerSessionProtectionTimeLimit(integer $GameServerSessionProtectionTimeLimit) 设置时限保护超时时间，默认60分钟
 */
class UpdateFleetAttributesRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队 Id
     */
    public $FleetId;

    /**
     * @var string 服务器舰队描述
     */
    public $Description;

    /**
     * @var string 服务器舰队名称
     */
    public $Name;

    /**
     * @var string 新建游戏会话保护策略
     */
    public $NewGameSessionProtectionPolicy;

    /**
     * @var ResourceCreationLimitPolicy 资源创建限制策略
     */
    public $ResourceCreationLimitPolicy;

    /**
     * @var integer 时限保护超时时间，默认60分钟
     */
    public $GameServerSessionProtectionTimeLimit;

    /**
     * @param string $FleetId 服务器舰队 Id
     * @param string $Description 服务器舰队描述
     * @param string $Name 服务器舰队名称
     * @param string $NewGameSessionProtectionPolicy 新建游戏会话保护策略
     * @param ResourceCreationLimitPolicy $ResourceCreationLimitPolicy 资源创建限制策略
     * @param integer $GameServerSessionProtectionTimeLimit 时限保护超时时间，默认60分钟
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NewGameSessionProtectionPolicy",$param) and $param["NewGameSessionProtectionPolicy"] !== null) {
            $this->NewGameSessionProtectionPolicy = $param["NewGameSessionProtectionPolicy"];
        }

        if (array_key_exists("ResourceCreationLimitPolicy",$param) and $param["ResourceCreationLimitPolicy"] !== null) {
            $this->ResourceCreationLimitPolicy = new ResourceCreationLimitPolicy();
            $this->ResourceCreationLimitPolicy->deserialize($param["ResourceCreationLimitPolicy"]);
        }

        if (array_key_exists("GameServerSessionProtectionTimeLimit",$param) and $param["GameServerSessionProtectionTimeLimit"] !== null) {
            $this->GameServerSessionProtectionTimeLimit = $param["GameServerSessionProtectionTimeLimit"];
        }
    }
}
