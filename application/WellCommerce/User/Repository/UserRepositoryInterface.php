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

namespace WellCommerce\User\Repository;

/**
 * Interface UserRepositoryInterface
 *
 * @package WellCommerce\User\Repository
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface UserRepositoryInterface
{
    const PRE_DELETE_EVENT  = 'user.repository.pre_delete';
    const POST_DELETE_EVENT = 'user.repository.post_delete';
    const PRE_SAVE_EVENT    = 'user.repository.pre_save';
    const POST_SAVE_EVENT   = 'user.repository.post_save';
    const LOGIN_SUCCEED     = 'user.login.succeed';

    /**
     * Returns all users as a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Returns single user
     *
     * @param $id
     *
     * @return \WellCommerce\User\Model\User
     */
    public function find($id);

    /**
     * Updates existing user or adds a new one
     *
     * @param array $data
     * @param       $id
     *
     * @return void
     */
    public function save(array $data, $id);

    /**
     * Deletes user
     *
     * @param $id
     *
     * @return void
     */
    public function delete($id);

    /**
     * Authorizes the user using given credentials
     *
     * @param array $data
     *
     * @return bool
     */
    public function authProcess(array $data);
}