<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Core\Type;

/**
 * Class PercentType
 *
 * @package WellCommerce\Core\Type
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class PercentType implements SuffixTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'suffix_type.percent';
    }

    /**
     * {@inheritdoc}
     */
    public function calculate($value, $modifier)
    {
        return $value * $modifier;
    }
} 