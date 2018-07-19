<?php

namespace Drupal\advertiser\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the advertiser entity.
 *
 * @ingroup advertiser
 *
 * @ContentEntityType(
 *   id = "advertiser",
 *   label = @Translation("advertiser"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\advertiser\Entity\Controller\AdvertiserListBuilder",
 *     "form" = {
 *       "default" = "Drupal\advertiser\Form\AdvertiserForm",
 *       "delete" = "Drupal\advertiser\Form\AdvertiserDeleteForm",
 *     },
 *     "access" = "Drupal\advertiser\AdvertiserAccessControlHandler",
 *   },
 *   list_cache_contexts = { "user" },
 *   base_table = "advertiser",
 *   admin_permission = "administer advertiser entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "canonical" = "/advertiser/{advertiser}",
 *     "edit-form" = "/advertiser/{advertiser}/edit",
 *     "delete-form" = "/advertiser/{advertiser}/delete",
 *     "collection" = "/test8"
 *   },
 *   field_ui_base_route = "advertiser.advertiser_settings",
 * )
 */

class Advertiser extends ContentEntityBase implements ContentEntityInterface {

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    // Standard field, used as unique if primary index.
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the Advertiser entity.'))
      ->setReadOnly(TRUE);

    // Standard field, unique outside of the scope of the current project.
    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the Advertiser entity.'))
      ->setReadOnly(TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The Name of the Advertiser entity.'))
      ->setSettings([
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', array(
        'label' => 'above',
        'type' => 'string',
        'weight' => -6,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string_textfield',
        'weight' => -6,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

      $fields['description'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Description'))
      ->setDescription(t('The Description of the Advertiser entity.'))
      ->setSettings([
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', array(
        'label' => 'above',
        'type' => 'string',
        'weight' => -6,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string_textfield',
        'weight' => -6,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

      $fields['lurl'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Url'))
      ->setDescription(t('The Url of the Advertiser entity.'))
      ->setSettings([
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', array(
        'label' => 'above',
        'type' => 'string',
        'weight' => -6,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string_textfield',
        'weight' => -6,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    // $fields['langcode'] = BaseFieldDefinition::create('language')
    //   ->setLabel(t('Language code'))
    //   ->setDescription(t('The language code of entity.'));
    // $fields['created'] = BaseFieldDefinition::create('created')
    //   ->setLabel(t('Created'))
    //   ->setDescription(t('The time that the entity was created.'));
    // $fields['changed'] = BaseFieldDefinition::create('changed')
    //   ->setLabel(t('Changed'))
    //   ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }
}