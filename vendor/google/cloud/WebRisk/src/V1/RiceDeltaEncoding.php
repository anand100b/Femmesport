<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Rice-Golomb encoded data. Used for sending compressed 4-byte hashes or
 * compressed removal indices.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.RiceDeltaEncoding</code>
 */
class RiceDeltaEncoding extends \Google\Protobuf\Internal\Message
{
    /**
     * The offset of the first entry in the encoded data, or, if only a single
     * integer was encoded, that single integer's value. If the field is empty or
     * missing, assume zero.
     *
     * Generated from protobuf field <code>int64 first_value = 1;</code>
     */
    private $first_value = 0;
    /**
     * The Golomb-Rice parameter, which is a number between 2 and 28. This field
     * is missing (that is, zero) if `num_entries` is zero.
     *
     * Generated from protobuf field <code>int32 rice_parameter = 2;</code>
     */
    private $rice_parameter = 0;
    /**
     * The number of entries that are delta encoded in the encoded data. If only a
     * single integer was encoded, this will be zero and the single value will be
     * stored in `first_value`.
     *
     * Generated from protobuf field <code>int32 entry_count = 3;</code>
     */
    private $entry_count = 0;
    /**
     * The encoded deltas that are encoded using the Golomb-Rice coder.
     *
     * Generated from protobuf field <code>bytes encoded_data = 4;</code>
     */
    private $encoded_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $first_value
     *           The offset of the first entry in the encoded data, or, if only a single
     *           integer was encoded, that single integer's value. If the field is empty or
     *           missing, assume zero.
     *     @type int $rice_parameter
     *           The Golomb-Rice parameter, which is a number between 2 and 28. This field
     *           is missing (that is, zero) if `num_entries` is zero.
     *     @type int $entry_count
     *           The number of entries that are delta encoded in the encoded data. If only a
     *           single integer was encoded, this will be zero and the single value will be
     *           stored in `first_value`.
     *     @type string $encoded_data
     *           The encoded deltas that are encoded using the Golomb-Rice coder.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The offset of the first entry in the encoded data, or, if only a single
     * integer was encoded, that single integer's value. If the field is empty or
     * missing, assume zero.
     *
     * Generated from protobuf field <code>int64 first_value = 1;</code>
     * @return int|string
     */
    public function getFirstValue()
    {
        return $this->first_value;
    }

    /**
     * The offset of the first entry in the encoded data, or, if only a single
     * integer was encoded, that single integer's value. If the field is empty or
     * missing, assume zero.
     *
     * Generated from protobuf field <code>int64 first_value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFirstValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->first_value = $var;

        return $this;
    }

    /**
     * The Golomb-Rice parameter, which is a number between 2 and 28. This field
     * is missing (that is, zero) if `num_entries` is zero.
     *
     * Generated from protobuf field <code>int32 rice_parameter = 2;</code>
     * @return int
     */
    public function getRiceParameter()
    {
        return $this->rice_parameter;
    }

    /**
     * The Golomb-Rice parameter, which is a number between 2 and 28. This field
     * is missing (that is, zero) if `num_entries` is zero.
     *
     * Generated from protobuf field <code>int32 rice_parameter = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRiceParameter($var)
    {
        GPBUtil::checkInt32($var);
        $this->rice_parameter = $var;

        return $this;
    }

    /**
     * The number of entries that are delta encoded in the encoded data. If only a
     * single integer was encoded, this will be zero and the single value will be
     * stored in `first_value`.
     *
     * Generated from protobuf field <code>int32 entry_count = 3;</code>
     * @return int
     */
    public function getEntryCount()
    {
        return $this->entry_count;
    }

    /**
     * The number of entries that are delta encoded in the encoded data. If only a
     * single integer was encoded, this will be zero and the single value will be
     * stored in `first_value`.
     *
     * Generated from protobuf field <code>int32 entry_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEntryCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->entry_count = $var;

        return $this;
    }

    /**
     * The encoded deltas that are encoded using the Golomb-Rice coder.
     *
     * Generated from protobuf field <code>bytes encoded_data = 4;</code>
     * @return string
     */
    public function getEncodedData()
    {
        return $this->encoded_data;
    }

    /**
     * The encoded deltas that are encoded using the Golomb-Rice coder.
     *
     * Generated from protobuf field <code>bytes encoded_data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEncodedData($var)
    {
        GPBUtil::checkString($var, False);
        $this->encoded_data = $var;

        return $this;
    }

}

