<?php

namespace Drupal\logbooks_migrate\Plugin\migrate\source;

use Drupal\migrate\Exception\RequirementsException;
use Drupal\migrate\Row;
use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;

/**
 * @MigrateSource(
 *   id = "logbooks_comment_type",
 * )
 */
class CommentType extends \Drupal\comment\Plugin\migrate\source\CommentType {

  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = parent::query();
    //$query->condition('t.name','logentry','=');
    return $query;
  }


}

