<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSdcdFd8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSdcdFd8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSdcdFd8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSdcdFd8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSdcdFd8\App_KernelDevDebugContainer([
    'container.build_hash' => 'SdcdFd8',
    'container.build_id' => 'a6f4d0e7',
    'container.build_time' => 1602675429,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSdcdFd8');
