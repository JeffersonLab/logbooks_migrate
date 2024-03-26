<?php

namespace Drupal\logbooks_migrate\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
* @MigrateSource(
 *   id = "elog_pr_table",
 * )
 */
class ElogPrTable extends SqlBase{

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
      'prid'        => 'Primary key. Uniquely identifies the PR. FK to an nid',
      'created'     => 'Unix timestamp the record was created',
      'changed'     => 'Unix timestamp the record was modified',
      'type'        =>  'OPS, SRF, HLA, etc.',
      'system_id'   => 'Identifies the system the PR is about',
      'system_name_cached'      => 'Caches the name corresponding to system_id',
      'group_id'    =>  'Identifies the responsible group',
      'group_name_cached'       => 'Caches the name corresponding to group_id',
      'component_id'            => 'Links to a specific component',
      'component_name_cached'   => 'Caches the name corresponding to component_id',
      'problem_id'  =>  'Links to a predefined problem',
      'problem_name_cached'     => 'Caches the name corresponding to problem_id',
      'needs_attention'         => 'State of the problem',
      'assignee'    =>  'Uid of the person tasked with resolving problem',
      'assignee_reminded'       => 'Unix timestamp of last reminder email to assignee',
      'leaders_reminded'        =>  'Unix timestamp of last reminder email to leaders',
    ];
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return ['prid' => ['type' => 'integer']];
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    $fields = array_keys($this->fields());
    return $this->select('elog_pr', 'p')
      ->fields('p', $fields);
  }

}
