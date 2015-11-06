<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bot extends Model {
	protected $table = 'bots';
	protected $fillable
		= [
			'bot_id',
			'name',
		];
}
