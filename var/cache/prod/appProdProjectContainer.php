<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEtfg0qc\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEtfg0qc/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEtfg0qc.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerEtfg0qc\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerEtfg0qc\appProdProjectContainer([
    'container.build_hash' => 'Etfg0qc',
    'container.build_id' => 'f6567363',
    'container.build_time' => 1569482254,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEtfg0qc');
