<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $post_id
 * @property int|null $user_id
 * @property string $body
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Post $post
 * @property User|null $user
 *
 * @package App\Models
 */
class Comment extends Model
{
	use HasFactory;
	
	protected $table = 'comments';

	protected $casts = [
		'post_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'user_id',
		'body'
	];

	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
