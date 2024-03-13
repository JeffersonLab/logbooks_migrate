<?php

namespace Drupal\logbooks_migrate\Plugin\migrate\source;
use Drupal\comment\Plugin\migrate\source\d7\Comment as Commentd7;

/**
 * Source plugin for comments.
 *
 * @MigrateSource(
 *   id = "logbooks_comment"
 * )
 */
class Comment extends Commentd7 {


  protected function nextCid() {
    return isset($this->configuration['first_cid']) ? $this->configuration['first_cid'] : 0;
  }


  protected function nextNid() {
    return isset($this->configuration['first_nid']) ? $this->configuration['first_nid'] : 0;
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = parent::query();
    $query->condition('c.cid',$this->nextCid(),'>');
    $query->condition('n.nid',$this->nextNid(),'>');
    $query->orderBy('cid','ASC');

    var_dump($query->__toString());

    return $query;

  }


}
