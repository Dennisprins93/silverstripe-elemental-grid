<?php

namespace TheWebmen\ElementalGrid\Extensions;

use DNADesign\Elemental\ORM\FieldType\DBObjectType;
use SilverStripe\Core\Config\Config;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\HeaderField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\FieldType\DBInt;

/***
 * Class BaseElementExtension
 * @package TheWebmen\ElementalGrid\Extensions
 *
 * @property int $ColWidth
 * @property int $ColOffset
 */
class BaseElementExtension extends DataExtension {

    private static array $db = [
        'ColWidth' => 'Int',
        'ColOffset' => 'Int',
    ];

    public function updateBlockSchema($blockSchema)
    {
        $blockSchema['ColWidth'] = 6;
        $blockSchema['ColOffset'] = 0;
    }
}
