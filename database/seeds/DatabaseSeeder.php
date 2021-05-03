<?php

use App\Models\Auth\User;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

use DevDojo\Chatter\Models\Category;
use DevDojo\Chatter\Models\Discussion;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        factory(User::class, 10)->create();

        factory(Category::class, 10)->create();

        factory(Discussion::class, 10)->create();


        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'failed_jobs',
            'ledgers',
            'jobs',
            'sessions',
        ]);

        $this->call(AuthTableSeeder::class);

        Model::reguard();
    }
}
