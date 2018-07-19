<?php

namespace Drupal\advertiser\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

class AdvertiserListBuilder extends EntityListBuilder {
  public function render() {
    $build['description'] = array(
      '#markup' => $this->t('Content Entity implements a Advertiser model. These advertises are fieldable entities. You can manage the fields on the <a href="@adminlink">Advertiser admin page</a>.', array(
        '@adminlink' => \Drupal::urlGenerator()
          ->generateFromRoute('advertiser.advertiser_settings'),
      )),
    );
    $build['table'] = parent::render();
    return $build;
  }

  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Name');
    $header['description'] = $this->t('Description');
    $header['lurl'] = $this->t('Url');
    return $header + parent::buildHeader();
  }

  public function buildRow(EntityInterface $entity) {
    $row['id'] = $entity->id();
    $row['name'] = $entity->name->value;
    $row['description'] = $entity->description->value;
    $row['lurl'] = $entity->lurl->value;
    return $row + parent::buildRow($entity);
  }
}