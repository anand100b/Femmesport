<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Jobs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af5430a23676f6f676c652f636c6f75642f6461746170726f632f76312f6a6f62732e70726f746f1218676f6f676c652e636c6f75642e6461746170726f632e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22c1020a0d4c6f6767696e67436f6e66696712570a116472697665725f6c6f675f6c6576656c7318022003280b323c2e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669672e4472697665724c6f674c6576656c73456e7472791a650a144472697665724c6f674c6576656c73456e747279120b0a036b6579180120012809123c0a0576616c756518022001280e322d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669672e4c6576656c3a02380122700a054c6576656c12150a114c4556454c5f554e535045434946494544100012070a03414c4c100112090a055452414345100212090a054445425547100312080a04494e464f100412080a045741524e100512090a054552524f52100612090a05464154414c100712070a034f4646100822f1020a094861646f6f704a6f62121b0a116d61696e5f6a61725f66696c655f757269180120012809480012140a0a6d61696e5f636c617373180220012809480012110a04617267731803200328094203e04101121a0a0d6a61725f66696c655f757269731804200328094203e0410112160a0966696c655f757269731805200328094203e0410112190a0c617263686976655f757269731806200328094203e04101124c0a0a70726f7065727469657318072003280b32332e676f6f676c652e636c6f75642e6461746170726f632e76312e4861646f6f704a6f622e50726f70657274696573456e7472794203e0410112440a0e6c6f6767696e675f636f6e66696718082001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142080a0664726976657222ef020a08537061726b4a6f62121b0a116d61696e5f6a61725f66696c655f757269180120012809480012140a0a6d61696e5f636c617373180220012809480012110a04617267731803200328094203e04101121a0a0d6a61725f66696c655f757269731804200328094203e0410112160a0966696c655f757269731805200328094203e0410112190a0c617263686976655f757269731806200328094203e04101124b0a0a70726f7065727469657318072003280b32322e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b4a6f622e50726f70657274696573456e7472794203e0410112440a0e6c6f6767696e675f636f6e66696718082001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142080a0664726976657222f8020a0a5079537061726b4a6f6212210a146d61696e5f707974686f6e5f66696c655f7572691801200128094203e0410212110a04617267731802200328094203e04101121d0a10707974686f6e5f66696c655f757269731803200328094203e04101121a0a0d6a61725f66696c655f757269731804200328094203e0410112160a0966696c655f757269731805200328094203e0410112190a0c617263686976655f757269731806200328094203e04101124d0a0a70726f7065727469657318072003280b32342e676f6f676c652e636c6f75642e6461746170726f632e76312e5079537061726b4a6f622e50726f70657274696573456e7472794203e0410112440a0e6c6f6767696e675f636f6e66696718082001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122210a0951756572794c69737412140a07717565726965731801200328094203e0410222b5030a07486976654a6f6212180a0e71756572795f66696c655f757269180120012809480012390a0a71756572795f6c69737418022001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e51756572794c697374480012200a13636f6e74696e75655f6f6e5f6661696c7572651803200128084203e0410112550a107363726970745f7661726961626c657318042003280b32362e676f6f676c652e636c6f75642e6461746170726f632e76312e486976654a6f622e5363726970745661726961626c6573456e7472794203e04101124a0a0a70726f7065727469657318052003280b32312e676f6f676c652e636c6f75642e6461746170726f632e76312e486976654a6f622e50726f70657274696573456e7472794203e04101121a0a0d6a61725f66696c655f757269731806200328094203e041011a360a145363726970745661726961626c6573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142090a077175657269657322e5030a0b537061726b53716c4a6f6212180a0e71756572795f66696c655f757269180120012809480012390a0a71756572795f6c69737418022001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e51756572794c697374480012590a107363726970745f7661726961626c657318032003280b323a2e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b53716c4a6f622e5363726970745661726961626c6573456e7472794203e04101124e0a0a70726f7065727469657318042003280b32352e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b53716c4a6f622e50726f70657274696573456e7472794203e04101121a0a0d6a61725f66696c655f757269731838200328094203e0410112440a0e6c6f6767696e675f636f6e66696718062001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041011a360a145363726970745661726961626c6573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142090a077175657269657322f8030a065069674a6f6212180a0e71756572795f66696c655f757269180120012809480012390a0a71756572795f6c69737418022001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e51756572794c697374480012200a13636f6e74696e75655f6f6e5f6661696c7572651803200128084203e0410112540a107363726970745f7661726961626c657318042003280b32352e676f6f676c652e636c6f75642e6461746170726f632e76312e5069674a6f622e5363726970745661726961626c6573456e7472794203e0410112490a0a70726f7065727469657318052003280b32302e676f6f676c652e636c6f75642e6461746170726f632e76312e5069674a6f622e50726f70657274696573456e7472794203e04101121a0a0d6a61725f66696c655f757269731806200328094203e0410112440a0e6c6f6767696e675f636f6e66696718072001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041011a360a145363726970745661726961626c6573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142090a077175657269657322b6020a09537061726b524a6f62121c0a0f6d61696e5f725f66696c655f7572691801200128094203e0410212110a04617267731802200328094203e0410112160a0966696c655f757269731803200328094203e0410112190a0c617263686976655f757269731804200328094203e04101124c0a0a70726f7065727469657318052003280b32332e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b524a6f622e50726f70657274696573456e7472794203e0410112440a0e6c6f6767696e675f636f6e66696718062001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801228a030a0950726573746f4a6f6212180a0e71756572795f66696c655f757269180120012809480012390a0a71756572795f6c69737418022001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e51756572794c697374480012200a13636f6e74696e75655f6f6e5f6661696c7572651803200128084203e04101121a0a0d6f75747075745f666f726d61741804200128094203e0410112180a0b636c69656e745f746167731805200328094203e04101124c0a0a70726f7065727469657318062003280b32332e676f6f676c652e636c6f75642e6461746170726f632e76312e50726573746f4a6f622e50726f70657274696573456e7472794203e0410112440a0e6c6f6767696e675f636f6e66696718072001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041011a310a0f50726f70657274696573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142090a077175657269657322440a0c4a6f62506c6163656d656e7412190a0c636c75737465725f6e616d651801200128094203e0410212190a0c636c75737465725f757569641802200128094203e0410322d9030a094a6f62537461747573123d0a05737461746518012001280e32292e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625374617475732e53746174654203e0410312170a0764657461696c731802200128094206e04103e0410112390a1073746174655f73746172745f74696d6518062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312430a08737562737461746518072001280e322c2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625374617475732e53756273746174654203e0410322a9010a05537461746512150a1153544154455f554e5350454349464945441000120b0a0750454e44494e471001120e0a0a53455455505f444f4e451008120b0a0752554e4e494e47100212120a0e43414e43454c5f50454e44494e47100312120a0e43414e43454c5f535441525445441007120d0a0943414e43454c4c4544100412080a04444f4e45100512090a054552524f52100612130a0f415454454d50545f4641494c555245100922480a085375627374617465120f0a0b554e5350454349464945441000120d0a095355424d49545445441001120a0a06515545554544100212100a0c5354414c455f5354415455531003223c0a0c4a6f625265666572656e636512170a0a70726f6a6563745f69641801200128094203e0410112130a066a6f625f69641802200128094203e0410122a5020a0f5961726e4170706c69636174696f6e12110a046e616d651801200128094203e0410212430a05737461746518022001280e322f2e676f6f676c652e636c6f75642e6461746170726f632e76312e5961726e4170706c69636174696f6e2e53746174654203e0410212150a0870726f67726573731803200128024203e0410212190a0c747261636b696e675f75726c1804200128094203e041012287010a05537461746512150a1153544154455f554e535045434946494544100012070a034e45571001120e0a0a4e45575f534156494e471002120d0a095355424d49545445441003120c0a0841434345505445441004120b0a0752554e4e494e471005120c0a0846494e49534845441006120a0a064641494c45441007120a0a064b494c4c4544100822ff080a034a6f62123e0a097265666572656e636518012001280b32262e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625265666572656e63654203e04101123e0a09706c6163656d656e7418022001280b32262e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f62506c6163656d656e744203e04102123e0a0a6861646f6f705f6a6f6218032001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e4861646f6f704a6f624203e041014800123c0a09737061726b5f6a6f6218042001280b32222e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b4a6f624203e04101480012400a0b7079737061726b5f6a6f6218052001280b32242e676f6f676c652e636c6f75642e6461746170726f632e76312e5079537061726b4a6f624203e041014800123a0a08686976655f6a6f6218062001280b32212e676f6f676c652e636c6f75642e6461746170726f632e76312e486976654a6f624203e04101480012380a077069675f6a6f6218072001280b32202e676f6f676c652e636c6f75642e6461746170726f632e76312e5069674a6f624203e041014800123f0a0b737061726b5f725f6a6f6218152001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b524a6f624203e04101480012430a0d737061726b5f73716c5f6a6f62180c2001280b32252e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b53716c4a6f624203e041014800123e0a0a70726573746f5f6a6f6218172001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e50726573746f4a6f624203e04101480012380a0673746174757318082001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625374617475734203e0410312400a0e7374617475735f686973746f7279180d2003280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625374617475734203e0410312490a117961726e5f6170706c69636174696f6e7318092003280b32292e676f6f676c652e636c6f75642e6461746170726f632e76312e5961726e4170706c69636174696f6e4203e0410312270a1a6472697665725f6f75747075745f7265736f757263655f7572691811200128094203e0410312250a186472697665725f636f6e74726f6c5f66696c65735f757269180f200128094203e04103123e0a066c6162656c7318122003280b32292e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f622e4c6162656c73456e7472794203e0410112400a0a7363686564756c696e6718142001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625363686564756c696e674203e0410112150a086a6f625f757569641816200128094203e0410312110a04646f6e651818200128084203e041031a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801420a0a08747970655f6a6f6222330a0d4a6f625363686564756c696e6712220a156d61785f6661696c757265735f7065725f686f75721801200128054203e04101228a010a105375626d69744a6f625265717565737412170a0a70726f6a6563745f69641801200128094203e0410212130a06726567696f6e1803200128094203e04102122f0a036a6f6218022001280b321d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f624203e0410212170a0a726571756573745f69641804200128094203e0410122ae010a0b4a6f624d6574616461746112130a066a6f625f69641801200128094203e0410312380a0673746174757318022001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625374617475734203e04103121b0a0e6f7065726174696f6e5f747970651803200128094203e0410312330a0a73746172745f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410322520a0d4765744a6f625265717565737412170a0a70726f6a6563745f69641801200128094203e0410212130a06726567696f6e1803200128094203e0410212130a066a6f625f69641802200128094203e0410222b3020a0f4c6973744a6f62735265717565737412170a0a70726f6a6563745f69641801200128094203e0410212130a06726567696f6e1806200128094203e0410212160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e0410112190a0c636c75737465725f6e616d651804200128094203e0410112590a116a6f625f73746174655f6d61746368657218052001280e32392e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6973744a6f6273526571756573742e4a6f6253746174654d6174636865724203e0410112130a0666696c7465721807200128094203e0410122360a0f4a6f6253746174654d61746368657212070a03414c4c1000120a0a064143544956451001120e0a0a4e4f4e5f414354495645100222bc010a105570646174654a6f625265717565737412170a0a70726f6a6563745f69641801200128094203e0410212130a06726567696f6e1802200128094203e0410212130a066a6f625f69641803200128094203e04102122f0a036a6f6218042001280b321d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f624203e0410212340a0b7570646174655f6d61736b18052001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e0410222620a104c6973744a6f6273526573706f6e736512300a046a6f627318012003280b321d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f624203e04103121c0a0f6e6578745f706167655f746f6b656e1802200128094203e0410122550a1043616e63656c4a6f625265717565737412170a0a70726f6a6563745f69641801200128094203e0410212130a06726567696f6e1803200128094203e0410212130a066a6f625f69641802200128094203e0410222550a1044656c6574654a6f625265717565737412170a0a70726f6a6563745f69641801200128094203e0410212130a06726567696f6e1803200128094203e0410212130a066a6f625f69641802200128094203e0410232fc0a0a0d4a6f62436f6e74726f6c6c657212b1010a095375626d69744a6f62122a2e676f6f676c652e636c6f75642e6461746170726f632e76312e5375626d69744a6f62526571756573741a1d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f62225982d3e493023b22362f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62733a7375626d69743a012ada411570726f6a6563745f69642c726567696f6e2c6a6f6212de010a145375626d69744a6f6241734f7065726174696f6e122a2e676f6f676c652e636c6f75642e6461746170726f632e76312e5375626d69744a6f62526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227b82d3e493024622412f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62733a7375626d697441734f7065726174696f6e3a012ada411770726f6a6563745f69642c20726567696f6e2c206a6f62ca41120a034a6f62120b4a6f624d6574616461746112ad010a064765744a6f6212272e676f6f676c652e636c6f75642e6461746170726f632e76312e4765744a6f62526571756573741a1d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f62225b82d3e493023a12382f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f69647dda411870726f6a6563745f69642c726567696f6e2c6a6f625f696412c9010a084c6973744a6f627312292e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6973744a6f6273526571756573741a2a2e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6973744a6f6273526573706f6e7365226682d3e4930231122f2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f6273da411170726f6a6563745f69642c726567696f6eda411870726f6a6563745f69642c726567696f6e2c66696c746572129d010a095570646174654a6f62122a2e676f6f676c652e636c6f75642e6461746170726f632e76312e5570646174654a6f62526571756573741a1d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f62224582d3e493023f32382f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f69647d3a036a6f6212bd010a0943616e63656c4a6f62122a2e676f6f676c652e636c6f75642e6461746170726f632e76312e43616e63656c4a6f62526571756573741a1d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f62226582d3e4930244223f2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f69647d3a63616e63656c3a012ada411870726f6a6563745f69642c726567696f6e2c6a6f625f696412ac010a0944656c6574654a6f62122a2e676f6f676c652e636c6f75642e6461746170726f632e76312e44656c6574654a6f62526571756573741a162e676f6f676c652e70726f746f6275662e456d707479225b82d3e493023a2a382f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f69647dda411870726f6a6563745f69642c726567696f6e2c6a6f625f69641a4bca41176461746170726f632e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d426d0a1c636f6d2e676f6f676c652e636c6f75642e6461746170726f632e763142094a6f627350726f746f50015a40676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6461746170726f632f76313b6461746170726f63620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

