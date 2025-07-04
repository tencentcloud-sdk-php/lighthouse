<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySnapshotAttribute请求参数结构体
 *
 * @method string getSnapshotId() 获取快照 ID, 可通过 <a href="https://cloud.tencent.com/document/product/1207/54388">DescribeSnapshots</a> 查询。
 * @method void setSnapshotId(string $SnapshotId) 设置快照 ID, 可通过 <a href="https://cloud.tencent.com/document/product/1207/54388">DescribeSnapshots</a> 查询。
 * @method string getSnapshotName() 获取新的快照名称，最长为 60 个字符。
 * @method void setSnapshotName(string $SnapshotName) 设置新的快照名称，最长为 60 个字符。
 */
class ModifySnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string 快照 ID, 可通过 <a href="https://cloud.tencent.com/document/product/1207/54388">DescribeSnapshots</a> 查询。
     */
    public $SnapshotId;

    /**
     * @var string 新的快照名称，最长为 60 个字符。
     */
    public $SnapshotName;

    /**
     * @param string $SnapshotId 快照 ID, 可通过 <a href="https://cloud.tencent.com/document/product/1207/54388">DescribeSnapshots</a> 查询。
     * @param string $SnapshotName 新的快照名称，最长为 60 个字符。
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
