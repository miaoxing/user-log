<?php

namespace Miaoxing\UserLog;

use miaoxing\plugin\BasePlugin;

class Plugin extends BasePlugin
{
    /**
     * {@inheritdoc}
     */
    protected $name = '用户日志';

    /**
     * {@inheritdoc}
     */
    protected $description = '后台展示用户操作日志的列表';

    public function onAdminNavGetNavs(&$navs, &$categories, &$subCategories)
    {
        $subCategories['user-log'] = [
            'parentId' => 'user',
            'name' => '日志',
            'icon' => 'fa fa-bars',
            'sort' => 0,
        ];

        $navs[] = [
            'parentId' => 'user-log',
            'url' => 'admin/user-logs',
            'name' => '操作日志',
        ];
    }
}
