<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1beta1/webrisk.proto

namespace Google\Cloud\WebRisk\V1beta1;

use UnexpectedValueException;

/**
 * The ways in which threat entry sets can be compressed.
 *
 * Protobuf type <code>google.cloud.webrisk.v1beta1.CompressionType</code>
 */
class CompressionType
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>COMPRESSION_TYPE_UNSPECIFIED = 0;</code>
     */
    const COMPRESSION_TYPE_UNSPECIFIED = 0;
    /**
     * Raw, uncompressed data.
     *
     * Generated from protobuf enum <code>RAW = 1;</code>
     */
    const RAW = 1;
    /**
     * Rice-Golomb encoded data.
     *
     * Generated from protobuf enum <code>RICE = 2;</code>
     */
    const RICE = 2;

    private static $valueToName = [
        self::COMPRESSION_TYPE_UNSPECIFIED => 'COMPRESSION_TYPE_UNSPECIFIED',
        self::RAW => 'RAW',
        self::RICE => 'RICE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

