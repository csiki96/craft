<?php

namespace craft\contentmigrations;

use Craft;
use craft\db\Migration;

/**
 * m220929_131434_my_migration_name migration.
 */
class m220929_131434_my_migration_name extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp(): bool
    {
        // Place migration code here...

        return true;
    }

    /**
     * @inheritdoc
     */
    public function safeDown(): bool
    {
        echo "m220929_131434_my_migration_name cannot be reverted.\n";
        return false;
    }
}
