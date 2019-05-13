<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataHubBundle\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class ElementMetadataKeyValuePairType
 * @package Pimcore\Bundle\DataHubBundle\GraphQL\Type
 */
class ElementMetadataKeyValuePairType extends ObjectType
{
    /**
     * @var self
     */
    protected static $instance;

    /**
     * PimcoreObjectType constructor.
     *
     * @param $class
     */
    public function __construct($config = [])
    {
        $config['name'] = 'element_metadata_item_' . uniqid();
        $this->build($config);
        parent::__construct($config);
    }

    /**
     * @return ElementMetadataKeyValuePairType
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    /**
     * @param array $config
     */
    public function build(&$config)
    {
        $config['fields']['name'] = Type::string();
        $config['fields']['value'] = Type::string();
    }
}
