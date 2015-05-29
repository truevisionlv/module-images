<?php
namespace Modules\Images\Object;

use Modules\CommonObjectCollection;

/**
 * Class ImageCollection
 * @package Modules\Images\Object
 *
 * @method setWhereItemType(string)
 * @method setWhereItemId(int)
 */
class ImageCollection extends CommonObjectCollection {
    protected $db_table = 'm_images';
}