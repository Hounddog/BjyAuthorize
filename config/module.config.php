<?php

return array(
    'zfcacl' => array(
        'default_role' => 'guest',
        'identity_provider' => 'ZfcAcl\Provider\Identity\ZfcUserZendDb',
        'unauthorized_strategy' => 'ZfcAcl\View\UnauthorizedStrategy',
        'role_providers' => array(
        ),
        'resource_providers' => array(
        ),
        'rule_providers' => array(
        ),
        'guards' => array(
        ),
    ),

    'view_manager' => array(
        'template_map' => array(
            'error/403' => __DIR__ . '/../view/error/403.phtml',
        ),
    ),
);
