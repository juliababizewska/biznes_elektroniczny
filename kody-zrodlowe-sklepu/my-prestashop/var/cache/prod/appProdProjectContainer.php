<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerThbcaws\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerThbcaws/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerThbcaws.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerThbcaws\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerThbcaws\appProdProjectContainer([
    'container.build_hash' => 'Thbcaws',
    'container.build_id' => 'd2caf7b4',
    'container.build_time' => 1730976010,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerThbcaws');
