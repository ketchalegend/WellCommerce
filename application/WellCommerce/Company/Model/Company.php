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
namespace WellCommerce\Company\Model;

use WellCommerce\Core\Component\Model\AbstractModel;
use WellCommerce\Core\Component\Model\ModelInterface;

/**
 * Class Company
 *
 * @package WellCommerce\Company\Model
 * @author  Adam Piotrowski <adam@gekosale.com>
 */
class Company extends AbstractModel implements ModelInterface
{
    protected $table = 'company';
    protected $fillable = ['id'];

    /**
     * Relation with Shop model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shop()
    {
        return $this->hasMany('WellCommerce\Shop\Model\Shop');
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationXmlMapping()
    {
        return __DIR__ . '/../Resources/config/validation.xml';
    }
}