<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTablesSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(PoncsTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        //$this->call(EntreprisesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(AuthorActionsTableSeeder::class);
        $this->call(CollaboratorActionsTableSeeder::class);
        $this->call(ActionActionsTableSeeder::class);
        $this->call(ProjectActionsTableSeeder::class);
        $this->call(ImplementationsTableSeeder::class);
        $this->call(ProjectActorsTableSeeder::class);
    }
}
