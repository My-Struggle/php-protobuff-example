<?php
require_once 'PKMSG/Msg_Body.php';
require_once 'PKMSG/PK_Head.php';
require_once 'PKMSG/Msg_Body_SystemType.php';
use PKMSG\PK_Head;
use PKMSG\Msg_Body;
use PKMSG\Msg_Body_SystemType;

$head = new PK_Head();
$head->setPkType(11);
$head->setPkLength(22);

$msg = new Msg_Body();
$msg->setPkHead($head);
$msg->setMsg("Hi,你好!!!");
$msg->setMsgLength(33);
$msg->setIndexID(44);
$msg->setSequence(15698);
$msg->setBodyNumber(5);

$type=new Msg_Body_SystemType();
$msg->setType($type::Linux);
$packed = $msg->serializeToString();

$body = new Msg_Body();
try {
    $body->parseFromString($packed);
} catch (Exception $ex) {
    die('Oops.. there is a bug in this example, ' . $ex->getMessage());

}

$body->dump();
/****************解析消息体****************/
echo "PkType=".$body->getPkHead()->getPkType()."\n";
echo "PkLength=".$body->getPkHead()->getPkLength()."\n";
echo "Msg=".$body->getMsg()."\n";
echo "MsgLength=".$body->getMsgLength()."\n";
echo "IndexID=".$body->getIndexID()."\n";
echo "Sequence=".$body->getSequence()."\n";
echo "BodyNumber=".$body->getBodyNumber()."\n";
echo "SystemType=".$body->getType()."\n";

//$SyeteType=new Msg_Body_SystemType();
switch ($body->getType()) {
    /*case $SyeteType::IOS:
        echo "The system type is IOS";
        # code...
        break;*/
    case Msg_Body_SystemType::IOS:
        echo "The system type is IOS";
        # code...
        break;
    case Msg_Body_SystemType::Android:
        echo "The system type is Android";
        # code...
        break;
    case Msg_Body_SystemType::Symbian:
        echo "The system type is Symbian";
        # code...
        break;
    case Msg_Body_SystemType::Windows:
        echo "The system type is Windows";
        # code...
        break;
    case Msg_Body_SystemType::Linux:
        echo "The system type is Linux";
        # code...
        break;
    case Msg_Body_SystemType::Other:
        echo "The system type is Other";
        # code...
        break;
    
    default:
        # code...
        break;
}

$body->reset();

?>

