<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP10txnv\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP10txnv/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerP10txnv.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerP10txnv\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerP10txnv\appDevDebugProjectContainer(array(
    'container.build_hash' => 'P10txnv',
    'container.build_id' => '91d235e8',
    'container.build_time' => 1542107156,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerP10txnv');
