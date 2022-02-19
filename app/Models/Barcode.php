<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Barcode
 * 
 * @property int $barcode
 * @property int $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Barcode extends Model
{
	protected $table = 'barcodes';
	public $incrementing = false;

	protected $casts = [
		'barcode' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'barcode',
		'product_id'
	];
}
