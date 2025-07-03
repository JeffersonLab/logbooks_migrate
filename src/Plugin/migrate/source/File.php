<?php

namespace Drupal\logbooks_migrate\Plugin\migrate\source;
use Drupal\file\Plugin\migrate\source\d7\File as D7File;

/**
 * Drupal 7 file source (optionally filtered by type) from database.
 *
 * @MigrateSource(
 *   id = "logbooks_files",
 *   source_module = "file"
 * )
 */
class File extends D7File{


  public function query() {
    $query = parent::query();
    $query->condition('f.fid',2502000,'>');
    return $query;
  }
}
