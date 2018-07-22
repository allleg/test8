<?php

namespace Drupal\advertiser;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a Advertiser entity.
 *
 * We have this interface so we can join the other interfaces it extends.
 *
 * @ingroup advertiser
 */
interface AdvertiserInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
