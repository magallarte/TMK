<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.vGud83Y' shared service.

return $this->privates['.service_locator.vGud83Y'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('article' => function (): \App\Entity\Article {
    return ($this->privates['.errored..service_locator.vGud83Y.App\Entity\Article'] ?? $this->load('getArticleService.php'));
}, 'session' => function () {
    return ($this->services['session'] ?? $this->load('getSessionService.php'));
}));
