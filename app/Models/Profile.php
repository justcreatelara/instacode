<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	use HasFactory;
	
	protected $guarded = [];

	public function profileImage(){
			
		$imagePath = ($this->image) ? $this->image : '/uploads/128sJbIILP7rZRqxLpE6l9JSGTw8QhNN2XlDLajj.png';
		return '/storage/' . $imagePath;
	}

	public function followers(){
			
		return $this->belongsToMany(User::class);
	}

    public function user()
			{
				return $this->belongsTo(User::class);
			}
}
