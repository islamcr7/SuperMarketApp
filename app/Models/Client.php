<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $telephone
 * @property string $address
 * @property string $limit_credit
 * @property string $remaining_credit
 * @property string $payment_dead_line
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';

	protected $fillable = [
		'firstname',
		'lastname',
		'telephone',
		'address',
		'limit_credit',
		'remaining_credit',
		'payment_dead_line'
	];
}
