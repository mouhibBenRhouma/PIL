<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSxuyi0i\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSxuyi0i/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSxuyi0i.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSxuyi0i\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerSxuyi0i\appDevDebugProjectContainer([
    'container.build_hash' => 'Sxuyi0i',
    'container.build_id' => '9162f96d',
    'container.build_time' => 1550164985,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSxuyi0i');
