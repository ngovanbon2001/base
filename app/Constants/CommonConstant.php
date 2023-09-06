<?php

namespace App\Constants;

class CommonConstant
{
    const ACTIVE_STATUS    = 1;
    const UN_ACTIVE_STATUS = 0;
    const TWO_DAYS         = 2;
    const PER_PAGE_LIMIT   = 10;
    const PENDING_STATUS   = 2;
    const SUCCESS_STATUS   = 1;
    const FAIL_STATUS      = 0;
    const USER_TYPE        = "user";
    const ADMIN_TYPE       = "admin";
    const NEW_USER_TYPE    = "new_user";
    const DATABASE_SYSTEM  = "chatgpt";
    const OPEN_AI_KEY      = "sk";
    const GUARD_NAME       = "web";
    const LANG_EN          = "en";
    const LANG_JP          = "jp";

    const USE_OPEN_AI_API_KEY = 0;

    const ARRAY_USER_TYPE = [
        self::ADMIN_TYPE => 1, self::NEW_USER_TYPE => 2,
    ];

    // Status code of User
    const ACTIVE_CODE          = "active";
    const INACTIVE_CODE        = "inactive";
    const PENDING_CODE         = "pending";
    const BANNED_CODE          = "banned";
    const SUCCESS_CODE_STATUS  = "Success";
    const PENDING_CODE_STATUS  = "Pending";
    const FAIL_CODE_STATUS     = "Fail";
    const ACTIVE_CODE_STATUS   = "Active";
    const INACTIVE_CODE_STATUS = "Inactive";

    // Format date
    const DATETIME_FORMAT_SECOND        = 'Y-m-d H:i:s';
    const DEFAULT_TENANT_NAME           = 'tenant';
    const DEFAULT_PERMISSION_NAME       = 'permission';
    const DEFAULT_TOPIC_NAME            = 'topic';
    const DEFAULT_PROMPT_NAME           = 'prompt';
    const DEFAULT_PROMPT_EXTEND_NAME    = 'promptextend';
    const DEFAULT_PROJECT_NAME          = 'project';
    const DEFAULT_USER_NAME             = 'user';
    const DEFAULT_GROUP_DEPARTMENT_NAME = 'group_department';
    const DOMAIN_CHAT_X_API_KEY         = "e7cfc1f227df194d2e08f520b9757482";
    const GUARD_USER                    = 'user';
    const PAGE_SIZE                     = 'page_size';
    const PAGE                          = 'page';
    const LIST_USER                     = 'list_user';
    const PAGINATE_PAGE                 = 15;
    const PAGE_NUMBER                   = 1;
    const USER_ADMIN                    = "ADMIN";

    // List sub-menu key with permission User
    const SUB_MENU = [
        'USER'             => ['user-list'],
        'GROUP_DEPARTMENT' => ['group-department-list'],
        'TENANT'           => ['tenant-list'],
        'TOPIC'            => ['topic-list'],
        'PROMPT'           => ['prompt-list'],
        'PROMPT_EXTEND'    => ['promptextend-list'],
        'PROJECT'          => ['project-list'],
        'PERMISSION'       => ['permission-list'],
    ];

    const UNSET_CONDITION = [
        self::PAGE, self::PAGE_SIZE, self::LIST_USER
    ];

    const DELETED_NULL = null;

    // List permission default
    const LIST_PERMISSION = [
        'LIST'   => 'list',
        'SHOW'   => 'show',
        'ADD'    => 'add',
        'UPDATE' => 'update',
        'DELETE' => 'delete',
    ];
}
