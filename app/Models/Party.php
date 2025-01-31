<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Party extends Model {


	protected $fillable=[
		'title',
		'subtitle',
		'type',
		'start',
		'end',
		'location',
		'domain',
		'leader',
		'actived',
	];

	public function user(){
		//与User模型建立一对一关系
		return $this->belongsTo(User::class, 'leader', 'id');
	}

}
