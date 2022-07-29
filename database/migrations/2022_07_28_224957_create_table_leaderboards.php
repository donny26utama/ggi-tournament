<?php

use App\Models\{
    Game,
    Leaderboard,
    User,
};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLeaderboards extends Migration
{
    private $game;
    private $leaderboard;
    private $user;

    public function __construct()
    {
        $this->game = Game::getTableName();
        $this->leaderboard = Leaderboard::getTableName();
        $this->user = User::getTableName();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->leaderboard, function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->unsignedBigInteger('game_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->integer('score')->default(0);
            $table->timestamps();

            $table->foreign('game_id')
                ->references('id')
                ->on($this->game);

            $table->foreign('user_id')
                ->references('id')
                ->on($this->user);

            $table->unique(['game_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->leaderboard);
    }
}
