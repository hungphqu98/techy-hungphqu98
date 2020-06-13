<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Wishlist extends Model
{
	protected $table = 'wishlist';
    public $timestamps = false;
    protected $fillable = ['user_id','product_id','status'];
    
}

?>