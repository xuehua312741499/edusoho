<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 12/12/2016
 * Time: 17:11.
 */

namespace Biz\Taxonomy\Dao;

use Codeages\Biz\Framework\Dao\GeneralDaoInterface;

interface CategoryDao extends GeneralDaoInterface
{
    public function getByCode($code);

    public function findByGroupIdAndParentId($groupId, $parentId);

    public function findByParentId($parentId, $orderBy, $start, $limit);

    public function findAllByParentId($parentId);

    public function findCountByParentId($parentId);

    public function findByGroupId($groupId);

    public function findByGroupIdAndOrgId($groupId, $orgId);

    public function findByIds(array $ids);

    public function findAll();
}
