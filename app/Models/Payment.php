<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Payment extends Model
{
	public $timestamps = false;
	protected $table = 'payment';

	protected $fillable = ['order_id','payment_method','code'];
	public $sortable = ['payment_method'];
}

?>