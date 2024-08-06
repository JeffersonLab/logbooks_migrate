<?php

namespace Drupal\logbooks_migrate\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;
use Drupal\node\Plugin\migrate\source\d7\NodeComplete;

/**
 * Source plugin for baseball players.
 *
 * @MigrateSource(
 *   id = "logbooks_logentry"
 * )
 */
class Logentry extends NodeComplete{

  public function fields() {
    return parent::fields();
  }


  protected function nextNid() {
    return isset($this->configuration['first_nid']) ? $this->configuration['first_nid'] : 0;
  }


  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = parent::query();
    //var_dump($this->configuration);
    $query->condition('n.nid',$this->nextNid(),'>');
    $query->orderBy('nid','ASC');

//    var_dump($query->__toString());

    return $query;

  }


}
