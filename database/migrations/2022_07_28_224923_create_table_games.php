<?php

use App\Models\{
    Game,
    Tournament,
};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGames extends Migration
{
    private $game;
    private $tournament;

    public function __construct()
    {
        $this->game = Game::getTableName();
        $this->tournament = Tournament::getTableName();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->game, function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('name');
            $table->unsignedBigInteger('tournament_id')->index();
            $table->timestamps();

            $table->foreign('tournament_id')
                ->references('id')
                ->on($this->tournament);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->game);
    }
}
