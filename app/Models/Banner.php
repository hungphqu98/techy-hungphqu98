<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Banner extends Model
{
	public $timestamps = false;
	protected $table = 'banner';

	protected $fillable = ['name','description','link','image','video','status'];
}

?>