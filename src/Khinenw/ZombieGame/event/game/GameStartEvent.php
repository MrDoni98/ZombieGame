<?php

namespace Khinenw\ZombieGame\event\game;

use Khinenw\ZombieGame\GameGenius;
use Khinenw\ZombieGame\event\GeniusGameEvent;

class GameStartEvent extends GeniusGameEvent{

	private $gameId;

	public function __construct(GameGenius $plugin, $gameId){
		parent::__construct($plugin);
		$this->gameId = $gameId;
	}

	public function getGameId(){
		return $this->gameId;
	}
}