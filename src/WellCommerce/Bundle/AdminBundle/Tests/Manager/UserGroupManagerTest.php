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

namespace WellCommerce\Bundle\AdminBundle\Tests\Manager;

use WellCommerce\Bundle\AdminBundle\Factory\UserGroupFactory;
use WellCommerce\Bundle\AdminBundle\Repository\UserGroupRepository;
use WellCommerce\Bundle\CoreBundle\Test\Manager\AbstractManagerTestCase;

/**
 * Class UserManagerTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class UserGroupManagerTest extends AbstractManagerTestCase
{
    protected function get()
    {
        return $this->container->get('user_group.manager');
    }
}