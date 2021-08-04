<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property int $id
 * @property int $amount
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @package App\Models
 */
class Transaction extends Model
{
    use HasFactory;

	protected $table = 'transactions';

	protected $casts = [
		'amount' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'amount',
		'user_id'
	];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
