<?php
namespace Drupal\civicrm;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Adds Civicrm library namespace to the autoloader.
 *
 */
class CivicrmServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function register(ContainerBuilder $container) {

    $namespaces = $container->getParameter('container.namespaces');
    $namespace = 'Civicrm';
    $namespaces[$namespace] = 'libraries/civicrm';
    $container->setParameter('container.namespaces', $namespaces);
  }

}
