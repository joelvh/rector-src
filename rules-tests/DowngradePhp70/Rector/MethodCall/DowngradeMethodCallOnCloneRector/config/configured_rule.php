<?php

declare(strict_types=1);

use Rector\DowngradePhp70\Rector\MethodCall\DowngradeMethodCallOnCloneRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(DowngradeMethodCallOnCloneRector::class);
};