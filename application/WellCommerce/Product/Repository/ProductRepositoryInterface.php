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

namespace WellCommerce\Product\Repository;

/**
 * Interface ProductRepositoryInterface
 *
 * @package WellCommerce\Product\Repository
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface ProductRepositoryInterface
{
    const PRE_DELETE_EVENT           = 'product.repository.pre_delete';
    const POST_DELETE_EVENT          = 'product.repository.post_delete';
    const PRE_SAVE_EVENT             = 'product.repository.pre_save';
    const POST_SAVE_EVENT            = 'product.repository.post_save';
    const PRE_UPDATE_DATAGRID_EVENT  = 'product.repository.pre_datagrid_save';
    const POST_UPDATE_DATAGRID_EVENT = 'product.repository.post_datagrid_save';

    /**
     * Returns all products as a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Returns a product model
     *
     * @param $id
     *
     * @return \WellCommerce\Product\Model\Product
     */
    public function find($id);

    /**
     * Adds or updates a product
     *
     * @param array $data
     * @param null  $id
     *
     * @return mixed
     */
    public function save(array $data, $id = null);

    /**
     * Deletes a product
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * Saves basic product values directly from DataGrid
     *
     * @param array $request
     *
     * @return array
     */
    public function updateDataGridRow(array $request);

    /**
     * Returns product model by slug
     *
     * @param      $slug
     * @param null $language
     *
     * @return mixed
     */
    public function findBySlug($slug, $language = null);

    /**
     * Returns product model by id
     *
     * @param      $id
     * @param null $language
     *
     * @return mixed
     */
    public function findById($id, $language = null);
}