<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function childrenRecursive() {
		return $this->childs()->with('children');
	}
	public function children() {
		return $this->hasMany(MenuItem::class, 'parent_id');
	}
}
