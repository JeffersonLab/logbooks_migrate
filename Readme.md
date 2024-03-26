# Module to migrate Drupal 7 Logbooks Content to Drupal 10



## Usage Examples

Execute migrations in corrector order using their migration ids.
```shell

vendor/bin/drush migrate:import logbooks_useful_link

# Entities that logentries depend on
vendor/bin/drush migrate:import taxonomy_term_tags
vendor/bin/drush migrate:import taxonomy_term_logbooks
vendor/bin/drush migrate:import logbooks_user
vendor/bin/drush migrate:import logbooks_user_role

# Note that the migrations below contains settings that restrict import to a subset
# for development purposes.
vendor/bin/drush migrate:import logbooks_files
vendor/bin/drush migrate:import node_complete_logentry
vendor/bin/drush migrate:import logbooks_comments

```

Rollback migrations in corrector order using their migration ids.
```shell


```

## Troubleshooting


If Migration crashes (ex: out of memory) and then you see the error
such as **Migration X is busy with another operation: Importing**
```shell
# Find the offending migration
vendor/bin/drush migrate:status
   complete_logentry                  Importing   1441432   0             1441432
# Reset its status
vendor/bin/drush migrate:reset-status complete_logentry

```

 * [https://chromatichq.com/insights/migration-memory-management-batching-and-limits/]()
 * [https://drupalize.me/blog/speed-your-drupal-migrations-high-water-marks]()
 *
```

## References

[https://www.metaltoad.com/blog/migrating-users-drupal-7-to-drupal-8]()
