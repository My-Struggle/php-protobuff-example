<?php
/**
 * Auto generated from pack.proto at 2018-09-30 15:51:35
 *
 * PKMSG package
 */

namespace PKMSG {
/**
 * Msg_Body message
 */
class Msg_Body extends \ProtobufMessage
{
    /* Field index constants */
    const PKHEAD = 1;
    const MSG = 2;
    const MSGLENGTH = 3;
    const INDEXID = 5;
    const SEQUENCE = 6;
    const BODYNUMBER = 7;
    const TYPE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PKHEAD => array(
            'name' => 'PkHead',
            'required' => false,
            'type' => '\PKMSG\PK_Head'
        ),
        self::MSG => array(
            'name' => 'Msg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGLENGTH => array(
            'name' => 'MsgLength',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INDEXID => array(
            'name' => 'IndexID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEQUENCE => array(
            'name' => 'Sequence',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BODYNUMBER => array(
            'name' => 'BodyNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'Type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PKHEAD] = null;
        $this->values[self::MSG] = null;
        $this->values[self::MSGLENGTH] = null;
        $this->values[self::INDEXID] = null;
        $this->values[self::SEQUENCE] = null;
        $this->values[self::BODYNUMBER] = null;
        $this->values[self::TYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'PkHead' property
     *
     * @param \PKMSG\PK_Head $value Property value
     *
     * @return null
     */
    public function setPkHead(\PKMSG\PK_Head $value=null)
    {
        return $this->set(self::PKHEAD, $value);
    }

    /**
     * Returns value of 'PkHead' property
     *
     * @return \PKMSG\PK_Head
     */
    public function getPkHead()
    {
        return $this->get(self::PKHEAD);
    }

    /**
     * Sets value of 'Msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value)
    {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'Msg' property
     *
     * @return string
     */
    public function getMsg()
    {
        $value = $this->get(self::MSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'MsgLength' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgLength($value)
    {
        return $this->set(self::MSGLENGTH, $value);
    }

    /**
     * Returns value of 'MsgLength' property
     *
     * @return integer
     */
    public function getMsgLength()
    {
        $value = $this->get(self::MSGLENGTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'IndexID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndexID($value)
    {
        return $this->set(self::INDEXID, $value);
    }

    /**
     * Returns value of 'IndexID' property
     *
     * @return integer
     */
    public function getIndexID()
    {
        $value = $this->get(self::INDEXID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Sequence' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSequence($value)
    {
        return $this->set(self::SEQUENCE, $value);
    }

    /**
     * Returns value of 'Sequence' property
     *
     * @return integer
     */
    public function getSequence()
    {
        $value = $this->get(self::SEQUENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'BodyNumber' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBodyNumber($value)
    {
        return $this->set(self::BODYNUMBER, $value);
    }

    /**
     * Returns value of 'BodyNumber' property
     *
     * @return integer
     */
    public function getBodyNumber()
    {
        $value = $this->get(self::BODYNUMBER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'Type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }
}
}