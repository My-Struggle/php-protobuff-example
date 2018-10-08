<?php
/**
 * Auto generated from pack.proto at 2018-09-30 15:51:35
 *
 * PKMSG package
 */

namespace PKMSG {
/**
 * PK_Head message
 */
class PK_Head extends \ProtobufMessage
{
    /* Field index constants */
    const PKTYPE = 1;
    const PKLENGTH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PKTYPE => array(
            'name' => 'PkType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PKLENGTH => array(
            'name' => 'PkLength',
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
        $this->values[self::PKTYPE] = null;
        $this->values[self::PKLENGTH] = null;
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
     * Sets value of 'PkType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPkType($value)
    {
        return $this->set(self::PKTYPE, $value);
    }

    /**
     * Returns value of 'PkType' property
     *
     * @return integer
     */
    public function getPkType()
    {
        $value = $this->get(self::PKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'PkLength' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPkLength($value)
    {
        return $this->set(self::PKLENGTH, $value);
    }

    /**
     * Returns value of 'PkLength' property
     *
     * @return integer
     */
    public function getPkLength()
    {
        $value = $this->get(self::PKLENGTH);
        return $value === null ? (integer)$value : $value;
    }
}
}