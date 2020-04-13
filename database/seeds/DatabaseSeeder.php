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
        $this->call(CommentsTableSeeder::class);
        $this->call(EchellesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(PoncsTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(ActionActionsTableSeeder::class);
        $this->call(ActionRealisatorsTableSeeder::class);
        $this->call(ActorProjectsTableSeeder::class);
        $this->call(AuthorActionsTableSeeder::class);
        $this->call(CalendarsTableSeeder::class);
        $this->call(CollaboratorActionsTableSeeder::class);
        $this->call(EchelleActionsTableSeeder::class);
        $this->call(ProjectActionsTableSeeder::class);
        $this->call(ProjectActorsTableSeeder::class);
        $this->call(RealisatorActionsTableSeeder::class);
        $this->call(ResponsableActionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StateActionsTableSeeder::class);
        $this->call(TypeActionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
