<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOdxpoWV\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOdxpoWV/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOdxpoWV.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOdxpoWV\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOdxpoWV\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OdxpoWV',
    'container.build_id' => '8c1aca13',
    'container.build_time' => 1576069954,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOdxpoWV');
