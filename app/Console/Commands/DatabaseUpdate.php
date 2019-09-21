<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update migration fields';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Schema::table('users', function (Blueprint $table) {
//            if (!Schema::hasColumn('users', 'id')) {
//                $table->string('list_id')->nullable()->index();
//            }
        });
    }
}
