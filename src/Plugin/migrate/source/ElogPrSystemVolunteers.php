<?php

namespace Drupal\logbooks_migrate\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * @MigrateSource(
 *   id = "elog_pr_system_volunteers",
 * )
 */
class ElogPrSystemVolunteers extends SqlBase{

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
        'system_id' => 'Identifies the system the PR is about',
        'system_name_cached' => 'Caches the name corresponding to system_id',
        'uid' => 'Uid of the person volunteering',
      ];
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'system_id' => ['type' => 'integer'],
      'uid' => ['type' => 'integer'],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    $fields = array_keys($this->fields());
    return $this->select('elog_pr_system_volunteers', 'v')
      ->fields('v', $fields);
  }

}
