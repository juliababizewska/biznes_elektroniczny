<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYcpvkgc\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYcpvkgc/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYcpvkgc.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYcpvkgc\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerYcpvkgc\appDevDebugProjectContainer([
    'container.build_hash' => 'Ycpvkgc',
    'container.build_id' => '82cc2585',
    'container.build_time' => 1733069385,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYcpvkgc');
