<?php

namespace Scalr\Service\Azure\Services\Network\DataType;

use Scalr\Service\Azure\DataType\AbstractListDataType;

/**
 * InterfaceList
 *
 * @author    Vlad Dobrovolskiy   <v.dobrovolskiy@scalr.com>
 * @since     5.6.8
 *
 */
class InterfaceList extends AbstractListDataType
{
    /**
     * {@inheritdoc}
     * @see Scalr\Service\Azure\DataType.AbstractListDataType::getClass()
     */
    public function getClass()
    {
        return __NAMESPACE__ . '\\InterfaceData';
    }

}