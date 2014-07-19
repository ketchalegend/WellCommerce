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

namespace WellCommerce\Contact\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use WellCommerce\Core\DependencyInjection\AbstractExtension;

/**
 * Class ContactExtension
 *
 * @package WellCommerce\Contact\DependencyInjection
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ContactExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
        $loader->load('layout.xml');
    }

    /**
     * {@inheritdoc}
     */
    public function registerRoutes(RouteCollection $collection, ContainerBuilder $container)
    {
        // admin routes
        $adminCollection = new RouteCollection();

        $adminCollection->add('admin.contact.index', new Route('/index', array(
            '_controller' => 'contact.admin.controller:indexAction',
        )));

        $adminCollection->add('admin.contact.add', new Route('/add', array(
            '_controller' => 'contact.admin.controller:addAction',
        )));

        $adminCollection->add('admin.contact.edit', new Route('/edit/{id}', array(
            '_controller' => 'contact.admin.controller:editAction',
            'id'          => null
        )));

        $adminCollection->addPrefix('/admin/contact');

        $collection->addCollection($adminCollection);

        // front routes
        $frontCollection = new RouteCollection();

        $frontCollection->add('front.contact.index', new Route('/contact', array(
            '_controller' => 'contact.front.controller:indexAction',
        )));

        $collection->addCollection($frontCollection);


    }
}