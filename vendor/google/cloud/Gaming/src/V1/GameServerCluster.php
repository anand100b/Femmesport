<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A game server cluster resource.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.GameServerCluster</code>
 */
class GameServerCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the game server cluster. Uses the form:
     * `projects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}`.
     * For example,
     * `projects/my-project/locations/{location}/realms/zanzibar/gameServerClusters/my-onprem-cluster`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * The labels associated with this game server cluster. Each label is a
     * key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * The game server cluster connection information. This information is used to
     * manage game server clusters.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerClusterConnectionInfo connection_info = 5;</code>
     */
    private $connection_info = null;
    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     */
    private $etag = '';
    /**
     * Human readable description of the cluster.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the game server cluster. Uses the form:
     *           `projects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}`.
     *           For example,
     *           `projects/my-project/locations/{location}/realms/zanzibar/gameServerClusters/my-onprem-cluster`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels associated with this game server cluster. Each label is a
     *           key-value pair.
     *     @type \Google\Cloud\Gaming\V1\GameServerClusterConnectionInfo $connection_info
     *           The game server cluster connection information. This information is used to
     *           manage game server clusters.
     *     @type string $etag
     *           ETag of the resource.
     *     @type string $description
     *           Human readable description of the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the game server cluster. Uses the form:
     * `projects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}`.
     * For example,
     * `projects/my-project/locations/{location}/realms/zanzibar/gameServerClusters/my-onprem-cluster`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the game server cluster. Uses the form:
     * `projects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}`.
     * For example,
     * `projects/my-project/locations/{location}/realms/zanzibar/gameServerClusters/my-onprem-cluster`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The labels associated with this game server cluster. Each label is a
     * key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels associated with this game server cluster. Each label is a
     * key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The game server cluster connection information. This information is used to
     * manage game server clusters.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerClusterConnectionInfo connection_info = 5;</code>
     * @return \Google\Cloud\Gaming\V1\GameServerClusterConnectionInfo
     */
    public function getConnectionInfo()
    {
        return $this->connection_info;
    }

    /**
     * The game server cluster connection information. This information is used to
     * manage game server clusters.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerClusterConnectionInfo connection_info = 5;</code>
     * @param \Google\Cloud\Gaming\V1\GameServerClusterConnectionInfo $var
     * @return $this
     */
    public function setConnectionInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\GameServerClusterConnectionInfo::class);
        $this->connection_info = $var;

        return $this;
    }

    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Human readable description of the cluster.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human readable description of the cluster.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

