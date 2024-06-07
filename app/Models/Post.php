<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $title
 * @property string $body
 * @property bool|null $published
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User|null $user
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Post extends Model
{
	use HasFactory;
	
	protected $table = 'posts';

	protected $casts = [
		'user_id' => 'int',
		'published' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'title',
		'body',
		'published'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
