<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entry Metadata.
 * A Data Catalog Entry resource represents another resource in Google
 * Cloud Platform (such as a BigQuery dataset or a Pub/Sub topic) or
 * outside of Google Cloud Platform. Clients can use the `linked_resource` field
 * in the Entry resource to refer to the original resource ID of the source
 * system.
 * An Entry resource contains resource details, such as its schema. An Entry can
 * also be used to attach flexible metadata, such as a
 * [Tag][google.cloud.datacatalog.v1.Tag].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * The Data Catalog resource name of the entry in URL format. Example:
     * * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     * Note that this Entry and its child resources may not actually be stored in
     * the location in this name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The resource this metadata entry refers to.
     * For Google Cloud Platform resources, `linked_resource` is the [full name of
     * the
     * resource](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     * For example, the `linked_resource` for a table resource from BigQuery is:
     * * //bigquery.googleapis.com/projects/projectId/datasets/datasetId/tables/tableId
     * Output only when Entry is of type in the EntryType enum. For entries with
     * user_specified_type, this field is optional and defaults to an empty
     * string.
     *
     * Generated from protobuf field <code>string linked_resource = 9;</code>
     */
    private $linked_resource = '';
    /**
     * Display information such as title and description. A short name to identify
     * the entry, for example, "Analytics Data - Jan 2011". Default value is an
     * empty string.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Entry description, which can consist of several sentences or paragraphs
     * that describe entry contents. Default value is an empty string.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    private $description = '';
    /**
     * Schema of the entry. An entry might not have any schema attached to it.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Schema schema = 5;</code>
     */
    private $schema = null;
    /**
     * Timestamps about the underlying resource, not about this Data Catalog
     * entry. Output only when Entry is of type in the EntryType enum. For entries
     * with user_specified_type, this field is optional and defaults to an empty
     * timestamp.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps source_system_timestamps = 7;</code>
     */
    private $source_system_timestamps = null;
    protected $entry_type;
    protected $system;
    protected $type_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The Data Catalog resource name of the entry in URL format. Example:
     *           * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     *           Note that this Entry and its child resources may not actually be stored in
     *           the location in this name.
     *     @type string $linked_resource
     *           The resource this metadata entry refers to.
     *           For Google Cloud Platform resources, `linked_resource` is the [full name of
     *           the
     *           resource](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     *           For example, the `linked_resource` for a table resource from BigQuery is:
     *           * //bigquery.googleapis.com/projects/projectId/datasets/datasetId/tables/tableId
     *           Output only when Entry is of type in the EntryType enum. For entries with
     *           user_specified_type, this field is optional and defaults to an empty
     *           string.
     *     @type int $type
     *           The type of the entry.
     *           Only used for Entries with types in the EntryType enum.
     *     @type string $user_specified_type
     *           Entry type if it does not fit any of the input-allowed values listed in
     *           `EntryType` enum above. When creating an entry, users should check the
     *           enum values first, if nothing matches the entry to be created, then
     *           provide a custom value, for example "my_special_type".
     *           `user_specified_type` strings must begin with a letter or underscore and
     *           can only contain letters, numbers, and underscores; are case insensitive;
     *           must be at least 1 character and at most 64 characters long.
     *           Currently, only FILESET enum value is allowed. All other entries created
     *           through Data Catalog must use `user_specified_type`.
     *     @type int $integrated_system
     *           Output only. This field indicates the entry's source system that Data
     *           Catalog integrates with, such as BigQuery or Pub/Sub.
     *     @type string $user_specified_system
     *           This field indicates the entry's source system that Data Catalog does not
     *           integrate with. `user_specified_system` strings must begin with a letter
     *           or underscore and can only contain letters, numbers, and underscores; are
     *           case insensitive; must be at least 1 character and at most 64 characters
     *           long.
     *     @type \Google\Cloud\DataCatalog\V1\GcsFilesetSpec $gcs_fileset_spec
     *           Specification that applies to a Cloud Storage fileset. This is only valid
     *           on entries of type FILESET.
     *     @type \Google\Cloud\DataCatalog\V1\BigQueryTableSpec $bigquery_table_spec
     *           Specification that applies to a BigQuery table. This is only valid on
     *           entries of type `TABLE`.
     *     @type \Google\Cloud\DataCatalog\V1\BigQueryDateShardedSpec $bigquery_date_sharded_spec
     *           Specification for a group of BigQuery tables with name pattern
     *           `[prefix]YYYYMMDD`. Context:
     *           https://cloud.google.com/bigquery/docs/partitioned-tables#partitioning_versus_sharding.
     *     @type string $display_name
     *           Display information such as title and description. A short name to identify
     *           the entry, for example, "Analytics Data - Jan 2011". Default value is an
     *           empty string.
     *     @type string $description
     *           Entry description, which can consist of several sentences or paragraphs
     *           that describe entry contents. Default value is an empty string.
     *     @type \Google\Cloud\DataCatalog\V1\Schema $schema
     *           Schema of the entry. An entry might not have any schema attached to it.
     *     @type \Google\Cloud\DataCatalog\V1\SystemTimestamps $source_system_timestamps
     *           Timestamps about the underlying resource, not about this Data Catalog
     *           entry. Output only when Entry is of type in the EntryType enum. For entries
     *           with user_specified_type, this field is optional and defaults to an empty
     *           timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The Data Catalog resource name of the entry in URL format. Example:
     * * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     * Note that this Entry and its child resources may not actually be stored in
     * the location in this name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The Data Catalog resource name of the entry in URL format. Example:
     * * projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}/entries/{entry_id}
     * Note that this Entry and its child resources may not actually be stored in
     * the location in this name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
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
     * The resource this metadata entry refers to.
     * For Google Cloud Platform resources, `linked_resource` is the [full name of
     * the
     * resource](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     * For example, the `linked_resource` for a table resource from BigQuery is:
     * * //bigquery.googleapis.com/projects/projectId/datasets/datasetId/tables/tableId
     * Output only when Entry is of type in the EntryType enum. For entries with
     * user_specified_type, this field is optional and defaults to an empty
     * string.
     *
     * Generated from protobuf field <code>string linked_resource = 9;</code>
     * @return string
     */
    public function getLinkedResource()
    {
        return $this->linked_resource;
    }

    /**
     * The resource this metadata entry refers to.
     * For Google Cloud Platform resources, `linked_resource` is the [full name of
     * the
     * resource](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     * For example, the `linked_resource` for a table resource from BigQuery is:
     * * //bigquery.googleapis.com/projects/projectId/datasets/datasetId/tables/tableId
     * Output only when Entry is of type in the EntryType enum. For entries with
     * user_specified_type, this field is optional and defaults to an empty
     * string.
     *
     * Generated from protobuf field <code>string linked_resource = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkedResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->linked_resource = $var;

        return $this;
    }

    /**
     * The type of the entry.
     * Only used for Entries with types in the EntryType enum.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->readOneof(2);
    }

    /**
     * The type of the entry.
     * Only used for Entries with types in the EntryType enum.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\EntryType::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Entry type if it does not fit any of the input-allowed values listed in
     * `EntryType` enum above. When creating an entry, users should check the
     * enum values first, if nothing matches the entry to be created, then
     * provide a custom value, for example "my_special_type".
     * `user_specified_type` strings must begin with a letter or underscore and
     * can only contain letters, numbers, and underscores; are case insensitive;
     * must be at least 1 character and at most 64 characters long.
     * Currently, only FILESET enum value is allowed. All other entries created
     * through Data Catalog must use `user_specified_type`.
     *
     * Generated from protobuf field <code>string user_specified_type = 16;</code>
     * @return string
     */
    public function getUserSpecifiedType()
    {
        return $this->readOneof(16);
    }

    /**
     * Entry type if it does not fit any of the input-allowed values listed in
     * `EntryType` enum above. When creating an entry, users should check the
     * enum values first, if nothing matches the entry to be created, then
     * provide a custom value, for example "my_special_type".
     * `user_specified_type` strings must begin with a letter or underscore and
     * can only contain letters, numbers, and underscores; are case insensitive;
     * must be at least 1 character and at most 64 characters long.
     * Currently, only FILESET enum value is allowed. All other entries created
     * through Data Catalog must use `user_specified_type`.
     *
     * Generated from protobuf field <code>string user_specified_type = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setUserSpecifiedType($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Output only. This field indicates the entry's source system that Data
     * Catalog integrates with, such as BigQuery or Pub/Sub.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.IntegratedSystem integrated_system = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getIntegratedSystem()
    {
        return $this->readOneof(17);
    }

    /**
     * Output only. This field indicates the entry's source system that Data
     * Catalog integrates with, such as BigQuery or Pub/Sub.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.IntegratedSystem integrated_system = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setIntegratedSystem($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\IntegratedSystem::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * This field indicates the entry's source system that Data Catalog does not
     * integrate with. `user_specified_system` strings must begin with a letter
     * or underscore and can only contain letters, numbers, and underscores; are
     * case insensitive; must be at least 1 character and at most 64 characters
     * long.
     *
     * Generated from protobuf field <code>string user_specified_system = 18;</code>
     * @return string
     */
    public function getUserSpecifiedSystem()
    {
        return $this->readOneof(18);
    }

    /**
     * This field indicates the entry's source system that Data Catalog does not
     * integrate with. `user_specified_system` strings must begin with a letter
     * or underscore and can only contain letters, numbers, and underscores; are
     * case insensitive; must be at least 1 character and at most 64 characters
     * long.
     *
     * Generated from protobuf field <code>string user_specified_system = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setUserSpecifiedSystem($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Specification that applies to a Cloud Storage fileset. This is only valid
     * on entries of type FILESET.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.GcsFilesetSpec gcs_fileset_spec = 6;</code>
     * @return \Google\Cloud\DataCatalog\V1\GcsFilesetSpec
     */
    public function getGcsFilesetSpec()
    {
        return $this->readOneof(6);
    }

    /**
     * Specification that applies to a Cloud Storage fileset. This is only valid
     * on entries of type FILESET.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.GcsFilesetSpec gcs_fileset_spec = 6;</code>
     * @param \Google\Cloud\DataCatalog\V1\GcsFilesetSpec $var
     * @return $this
     */
    public function setGcsFilesetSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\GcsFilesetSpec::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Specification that applies to a BigQuery table. This is only valid on
     * entries of type `TABLE`.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.BigQueryTableSpec bigquery_table_spec = 12;</code>
     * @return \Google\Cloud\DataCatalog\V1\BigQueryTableSpec
     */
    public function getBigqueryTableSpec()
    {
        return $this->readOneof(12);
    }

    /**
     * Specification that applies to a BigQuery table. This is only valid on
     * entries of type `TABLE`.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.BigQueryTableSpec bigquery_table_spec = 12;</code>
     * @param \Google\Cloud\DataCatalog\V1\BigQueryTableSpec $var
     * @return $this
     */
    public function setBigqueryTableSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\BigQueryTableSpec::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Specification for a group of BigQuery tables with name pattern
     * `[prefix]YYYYMMDD`. Context:
     * https://cloud.google.com/bigquery/docs/partitioned-tables#partitioning_versus_sharding.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.BigQueryDateShardedSpec bigquery_date_sharded_spec = 15;</code>
     * @return \Google\Cloud\DataCatalog\V1\BigQueryDateShardedSpec
     */
    public function getBigqueryDateShardedSpec()
    {
        return $this->readOneof(15);
    }

    /**
     * Specification for a group of BigQuery tables with name pattern
     * `[prefix]YYYYMMDD`. Context:
     * https://cloud.google.com/bigquery/docs/partitioned-tables#partitioning_versus_sharding.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.BigQueryDateShardedSpec bigquery_date_sharded_spec = 15;</code>
     * @param \Google\Cloud\DataCatalog\V1\BigQueryDateShardedSpec $var
     * @return $this
     */
    public function setBigqueryDateShardedSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\BigQueryDateShardedSpec::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Display information such as title and description. A short name to identify
     * the entry, for example, "Analytics Data - Jan 2011". Default value is an
     * empty string.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display information such as title and description. A short name to identify
     * the entry, for example, "Analytics Data - Jan 2011". Default value is an
     * empty string.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Entry description, which can consist of several sentences or paragraphs
     * that describe entry contents. Default value is an empty string.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Entry description, which can consist of several sentences or paragraphs
     * that describe entry contents. Default value is an empty string.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Schema of the entry. An entry might not have any schema attached to it.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Schema schema = 5;</code>
     * @return \Google\Cloud\DataCatalog\V1\Schema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Schema of the entry. An entry might not have any schema attached to it.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Schema schema = 5;</code>
     * @param \Google\Cloud\DataCatalog\V1\Schema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\Schema::class);
        $this->schema = $var;

        return $this;
    }

    /**
     * Timestamps about the underlying resource, not about this Data Catalog
     * entry. Output only when Entry is of type in the EntryType enum. For entries
     * with user_specified_type, this field is optional and defaults to an empty
     * timestamp.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps source_system_timestamps = 7;</code>
     * @return \Google\Cloud\DataCatalog\V1\SystemTimestamps
     */
    public function getSourceSystemTimestamps()
    {
        return $this->source_system_timestamps;
    }

    /**
     * Timestamps about the underlying resource, not about this Data Catalog
     * entry. Output only when Entry is of type in the EntryType enum. For entries
     * with user_specified_type, this field is optional and defaults to an empty
     * timestamp.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps source_system_timestamps = 7;</code>
     * @param \Google\Cloud\DataCatalog\V1\SystemTimestamps $var
     * @return $this
     */
    public function setSourceSystemTimestamps($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\SystemTimestamps::class);
        $this->source_system_timestamps = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryType()
    {
        return $this->whichOneof("entry_type");
    }

    /**
     * @return string
     */
    public function getSystem()
    {
        return $this->whichOneof("system");
    }

    /**
     * @return string
     */
    public function getTypeSpec()
    {
        return $this->whichOneof("type_spec");
    }

}

