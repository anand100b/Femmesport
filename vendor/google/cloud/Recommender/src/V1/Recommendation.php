<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommendation.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A recommendation along with a suggested action. E.g., a rightsizing
 * recommendation for an underutilized VM, IAM role recommendations, etc
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.Recommendation</code>
 */
class Recommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of recommendation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Free-form human readable summary in English. The maximum length is 500
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Contains an identifier for a subtype of recommendations produced for the
     * same recommender. Subtype is a function of content and impact, meaning a
     * new subtype might be added when significant changes to `content` or
     * `primary_impact.category` are introduced. See the Recommenders section
     * to see a list of subtypes for a given Recommender.
     * Examples:
     *   For recommender = "google.iam.policy.Recommender",
     *   recommender_subtype can be one of "REMOVE_ROLE"/"REPLACE_ROLE"
     *
     * Generated from protobuf field <code>string recommender_subtype = 12;</code>
     */
    private $recommender_subtype = '';
    /**
     * Last time this recommendation was refreshed by the system that created it
     * in the first place.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_refresh_time = 4;</code>
     */
    private $last_refresh_time = null;
    /**
     * The primary impact that this recommendation can have while trying to
     * optimize for one category.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Impact primary_impact = 5;</code>
     */
    private $primary_impact = null;
    /**
     * Optional set of additional impact that this recommendation may have when
     * trying to optimize for the primary category. These may be positive
     * or negative.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Impact additional_impact = 6;</code>
     */
    private $additional_impact;
    /**
     * Content of the recommendation describing recommended changes to resources.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommendationContent content = 7;</code>
     */
    private $content = null;
    /**
     * Information for state. Contains state and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommendationStateInfo state_info = 10;</code>
     */
    private $state_info = null;
    /**
     * Fingerprint of the Recommendation. Provides optimistic locking when
     * updating states.
     *
     * Generated from protobuf field <code>string etag = 11;</code>
     */
    private $etag = '';
    /**
     * Insights that led to this recommendation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Recommendation.InsightReference associated_insights = 14;</code>
     */
    private $associated_insights;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of recommendation.
     *     @type string $description
     *           Free-form human readable summary in English. The maximum length is 500
     *           characters.
     *     @type string $recommender_subtype
     *           Contains an identifier for a subtype of recommendations produced for the
     *           same recommender. Subtype is a function of content and impact, meaning a
     *           new subtype might be added when significant changes to `content` or
     *           `primary_impact.category` are introduced. See the Recommenders section
     *           to see a list of subtypes for a given Recommender.
     *           Examples:
     *             For recommender = "google.iam.policy.Recommender",
     *             recommender_subtype can be one of "REMOVE_ROLE"/"REPLACE_ROLE"
     *     @type \Google\Protobuf\Timestamp $last_refresh_time
     *           Last time this recommendation was refreshed by the system that created it
     *           in the first place.
     *     @type \Google\Cloud\Recommender\V1\Impact $primary_impact
     *           The primary impact that this recommendation can have while trying to
     *           optimize for one category.
     *     @type \Google\Cloud\Recommender\V1\Impact[]|\Google\Protobuf\Internal\RepeatedField $additional_impact
     *           Optional set of additional impact that this recommendation may have when
     *           trying to optimize for the primary category. These may be positive
     *           or negative.
     *     @type \Google\Cloud\Recommender\V1\RecommendationContent $content
     *           Content of the recommendation describing recommended changes to resources.
     *     @type \Google\Cloud\Recommender\V1\RecommendationStateInfo $state_info
     *           Information for state. Contains state and metadata.
     *     @type string $etag
     *           Fingerprint of the Recommendation. Provides optimistic locking when
     *           updating states.
     *     @type \Google\Cloud\Recommender\V1\Recommendation\InsightReference[]|\Google\Protobuf\Internal\RepeatedField $associated_insights
     *           Insights that led to this recommendation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of recommendation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of recommendation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Free-form human readable summary in English. The maximum length is 500
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Free-form human readable summary in English. The maximum length is 500
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * Contains an identifier for a subtype of recommendations produced for the
     * same recommender. Subtype is a function of content and impact, meaning a
     * new subtype might be added when significant changes to `content` or
     * `primary_impact.category` are introduced. See the Recommenders section
     * to see a list of subtypes for a given Recommender.
     * Examples:
     *   For recommender = "google.iam.policy.Recommender",
     *   recommender_subtype can be one of "REMOVE_ROLE"/"REPLACE_ROLE"
     *
     * Generated from protobuf field <code>string recommender_subtype = 12;</code>
     * @return string
     */
    public function getRecommenderSubtype()
    {
        return $this->recommender_subtype;
    }

    /**
     * Contains an identifier for a subtype of recommendations produced for the
     * same recommender. Subtype is a function of content and impact, meaning a
     * new subtype might be added when significant changes to `content` or
     * `primary_impact.category` are introduced. See the Recommenders section
     * to see a list of subtypes for a given Recommender.
     * Examples:
     *   For recommender = "google.iam.policy.Recommender",
     *   recommender_subtype can be one of "REMOVE_ROLE"/"REPLACE_ROLE"
     *
     * Generated from protobuf field <code>string recommender_subtype = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setRecommenderSubtype($var)
    {
        GPBUtil::checkString($var, True);
        $this->recommender_subtype = $var;

        return $this;
    }

    /**
     * Last time this recommendation was refreshed by the system that created it
     * in the first place.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_refresh_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastRefreshTime()
    {
        return $this->last_refresh_time;
    }

    /**
     * Last time this recommendation was refreshed by the system that created it
     * in the first place.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_refresh_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastRefreshTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_refresh_time = $var;

        return $this;
    }

    /**
     * The primary impact that this recommendation can have while trying to
     * optimize for one category.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Impact primary_impact = 5;</code>
     * @return \Google\Cloud\Recommender\V1\Impact
     */
    public function getPrimaryImpact()
    {
        return $this->primary_impact;
    }

    /**
     * The primary impact that this recommendation can have while trying to
     * optimize for one category.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Impact primary_impact = 5;</code>
     * @param \Google\Cloud\Recommender\V1\Impact $var
     * @return $this
     */
    public function setPrimaryImpact($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\Impact::class);
        $this->primary_impact = $var;

        return $this;
    }

    /**
     * Optional set of additional impact that this recommendation may have when
     * trying to optimize for the primary category. These may be positive
     * or negative.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Impact additional_impact = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalImpact()
    {
        return $this->additional_impact;
    }

    /**
     * Optional set of additional impact that this recommendation may have when
     * trying to optimize for the primary category. These may be positive
     * or negative.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Impact additional_impact = 6;</code>
     * @param \Google\Cloud\Recommender\V1\Impact[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalImpact($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Recommender\V1\Impact::class);
        $this->additional_impact = $arr;

        return $this;
    }

    /**
     * Content of the recommendation describing recommended changes to resources.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommendationContent content = 7;</code>
     * @return \Google\Cloud\Recommender\V1\RecommendationContent
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Content of the recommendation describing recommended changes to resources.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommendationContent content = 7;</code>
     * @param \Google\Cloud\Recommender\V1\RecommendationContent $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\RecommendationContent::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Information for state. Contains state and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommendationStateInfo state_info = 10;</code>
     * @return \Google\Cloud\Recommender\V1\RecommendationStateInfo
     */
    public function getStateInfo()
    {
        return $this->state_info;
    }

    /**
     * Information for state. Contains state and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommendationStateInfo state_info = 10;</code>
     * @param \Google\Cloud\Recommender\V1\RecommendationStateInfo $var
     * @return $this
     */
    public function setStateInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\RecommendationStateInfo::class);
        $this->state_info = $var;

        return $this;
    }

    /**
     * Fingerprint of the Recommendation. Provides optimistic locking when
     * updating states.
     *
     * Generated from protobuf field <code>string etag = 11;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Fingerprint of the Recommendation. Provides optimistic locking when
     * updating states.
     *
     * Generated from protobuf field <code>string etag = 11;</code>
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
     * Insights that led to this recommendation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Recommendation.InsightReference associated_insights = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociatedInsights()
    {
        return $this->associated_insights;
    }

    /**
     * Insights that led to this recommendation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Recommendation.InsightReference associated_insights = 14;</code>
     * @param \Google\Cloud\Recommender\V1\Recommendation\InsightReference[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssociatedInsights($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Recommender\V1\Recommendation\InsightReference::class);
        $this->associated_insights = $arr;

        return $this;
    }

}
