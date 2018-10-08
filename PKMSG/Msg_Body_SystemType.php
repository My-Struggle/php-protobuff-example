<?php
/**
 * Auto generated from pack.proto at 2018-09-30 15:51:35
 *
 * PKMSG package
 */

namespace PKMSG {
/**
 * SystemType enum embedded in Msg_Body message
 */
final class Msg_Body_SystemType
{
    const IOS = 0;
    const Android = 1;
    const Symbian = 2;
    const Windows = 3;
    const Linux = 4;
    const Other = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'IOS' => self::IOS,
            'Android' => self::Android,
            'Symbian' => self::Symbian,
            'Windows' => self::Windows,
            'Linux' => self::Linux,
            'Other' => self::Other,
        );
    }
}
}