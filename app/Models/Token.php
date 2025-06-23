?<?php


 namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Token extends Model
{
    protected $fillable = [
        'button_id',
        'user_id',
        'token',
        'contenido',
        'view_count',
        'last_used_at',
    ];

public static function generateForPublication($publicationId){
 
    return self::create([
        'button_id' => $publicationId,
        'token' => Str::uuid(), // o Str::random(40) para un token más corto
     ]);
    }

/*Funcion para correlacionar con el button_id
public function publication()
{
    return $this->belongsTo(Publication::class);
}
*/
}