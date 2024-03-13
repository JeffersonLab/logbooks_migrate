<?php

namespace Drupal\logbooks_migrate\Plugin\migrate\source;

use Drupal\migrate\Exception\RequirementsException;
use Drupal\migrate\Row;
use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;

/**
 * Drupal 6/7 comment types source from database.
 *
 * For available configuration keys, refer to the parent classes.
 *
 * @see \Drupal\migrate\Plugin\migrate\source\SqlBase
 * @see \Drupal\migrate\Plugin\migrate\source\SourcePluginBase
 *
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

