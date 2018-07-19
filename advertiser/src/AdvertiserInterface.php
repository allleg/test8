<?php

namespace Drupal\advertiser;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

interface AdvertiserInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
