<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7k6WjpW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7k6WjpW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7k6WjpW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7k6WjpW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7k6WjpW\App_KernelDevDebugContainer([
    'container.build_hash' => '7k6WjpW',
    'container.build_id' => 'feb2e73c',
    'container.build_time' => 1680130451,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7k6WjpW');
