<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/import.proto

namespace GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1;

class Import
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Catalog::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEvent::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\RecommendationengineResources::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aba140a36676f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461312f696d706f72742e70726f746f1229676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461311a19676f6f676c652f6170692f7265736f757263652e70726f746f1a37676f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461312f636174616c6f672e70726f746f1a3a676f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461312f757365725f6576656e742e70726f746f1a4e676f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461312f7265636f6d6d656e646174696f6e656e67696e655f7265736f75726365732e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22240a09476373536f7572636512170a0a696e7075745f757269731801200328094203e0410222690a13436174616c6f67496e6c696e65536f7572636512520a0d636174616c6f675f6974656d7318012003280b32362e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e436174616c6f674974656d4203e0410122670a15557365724576656e74496e6c696e65536f75726365124e0a0b757365725f6576656e747318012003280b32342e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e557365724576656e744203e0410122390a12496d706f72744572726f7273436f6e66696712140a0a6763735f7072656669781801200128094800420d0a0b64657374696e6174696f6e22a7020a19496d706f7274436174616c6f674974656d735265717565737412430a06706172656e741801200128094233e04102fa412d0a2b7265636f6d6d656e646174696f6e656e67696e652e676f6f676c65617069732e636f6d2f436174616c6f6712170a0a726571756573745f69641802200128094203e0410112510a0c696e7075745f636f6e66696718032001280b32362e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e496e707574436f6e6669674203e0410212590a0d6572726f72735f636f6e66696718042001280b323d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e496d706f72744572726f7273436f6e6669674203e0410122a8020a17496d706f7274557365724576656e74735265717565737412460a06706172656e741801200128094236e04102fa41300a2e7265636f6d6d656e646174696f6e656e67696e652e676f6f676c65617069732e636f6d2f4576656e7453746f726512170a0a726571756573745f69641802200128094203e0410112510a0c696e7075745f636f6e66696718032001280b32362e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e496e707574436f6e6669674203e0410212590a0d6572726f72735f636f6e66696718042001280b323d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e496d706f72744572726f7273436f6e6669674203e0410122aa020a0b496e707574436f6e666967125f0a15636174616c6f675f696e6c696e655f736f7572636518012001280b323e2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e436174616c6f67496e6c696e65536f757263654800124a0a0a6763735f736f7572636518022001280b32342e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e476373536f75726365480012640a18757365725f6576656e745f696e6c696e655f736f7572636518032001280b32402e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e557365724576656e74496e6c696e65536f75726365480042080a06736f7572636522cc010a0e496d706f72744d6574616461746112160a0e6f7065726174696f6e5f6e616d6518052001280912120a0a726571756573745f6964180320012809122f0a0b6372656174655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012150a0d737563636573735f636f756e7418012001280312150a0d6661696c7572655f636f756e74180220012803122f0a0b7570646174655f74696d6518062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70229d010a1a496d706f7274436174616c6f674974656d73526573706f6e736512290a0d6572726f725f73616d706c657318012003280b32122e676f6f676c652e7270632e53746174757312540a0d6572726f72735f636f6e66696718022001280b323d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e496d706f72744572726f7273436f6e66696722f6010a18496d706f7274557365724576656e7473526573706f6e736512290a0d6572726f725f73616d706c657318012003280b32122e676f6f676c652e7270632e53746174757312540a0d6572726f72735f636f6e66696718022001280b323d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e496d706f72744572726f7273436f6e66696712590a0e696d706f72745f73756d6d61727918032001280b32412e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e557365724576656e74496d706f727453756d6d61727922540a16557365724576656e74496d706f727453756d6d617279121b0a136a6f696e65645f6576656e74735f636f756e74180120012803121d0a15756e6a6f696e65645f6576656e74735f636f756e74180220012803429f020a2d636f6d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e7631626574613150015a5d676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461313b7265636f6d6d656e646174696f6e656e67696e65a202055245434149aa0229476f6f676c652e436c6f75642e5265636f6d6d656e646174696f6e456e67696e652e56314265746131ca0229476f6f676c655c436c6f75645c5265636f6d6d656e646174696f6e456e67696e655c56316265746131ea022c476f6f676c653a3a436c6f75643a3a5265636f6d6d656e646174696f6e456e67696e653a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
