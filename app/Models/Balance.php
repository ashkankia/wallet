<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Balance
 * 
 * @property int $id
 * @property int $balance
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Balance extends Model
{
	protected $table = 'balances';

	protected $casts = [
		'balance' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'balance',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
