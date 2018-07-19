<?php

namespace Drupal\advertiser;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

class AdvertiserAccessControlHandler extends EntityAccessControlHandler {

  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    $admin_permission = $this->entityType->getAdminPermission();
    if (\Drupal::currentUser()->hasPermission($admin_permission)) {
      return AccessResult::allowed();
    }
    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view advertiser entity');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit advertiser entity');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete advertiser entity');
    }
    return AccessResult::neutral();
  }

  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    $admin_permission = $this->entityType->getAdminPermission();
    if (\Drupal::currentUser()->hasPermission($admin_permission)) {
      return AccessResult::allowed();
    }
    return AccessResult::allowedIfHasPermission($account, 'add advertiser entity');
  }
}
