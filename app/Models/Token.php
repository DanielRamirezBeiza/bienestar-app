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
        'proposito',
        'expires_at',
        'is_used',
        'ip_address',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'array',
        'expires_at' => 'datetime',
        'is_used' => 'boolean',
    ];

    // ✅ Crear un nuevo token con propiedades personalizadas
    public static function generate(array $data = []): self
    {
        return self::create([
            'button_id'  => $data['button_id'] ?? Str::uuid(),
            'user_id'    => $data['user_id'] ?? null,
            'token'      => $data['token'] ?? Str::random(64),
            'contenido'  => $data['contenido'] ?? null,
            'proposito'  => $data['proposito'] ?? null,
            'expires_at' => $data['expires_at'] ?? Carbon::now()->addDays(1),
            'ip_address' => $data['ip_address'] ?? request()->ip(),
            'metadata'   => $data['metadata'] ?? [],
            'eva'        => $data['eva'] ?? null,
            'likert'     => $data['likert'] ?? null,
        ]);
    }

    // ✅ Validar si un token es válido (existe, no usado, no expirado)
    public static function isValid(string $token): bool
    {
        $tokenRecord = self::where('token', $token)->first();

        if (!$tokenRecord) return false;

        if ($tokenRecord->is_used) return false;

        if ($tokenRecord->expires_at && $tokenRecord->expires_at->isPast()) return false;

        return true;
    }

    // ✅ Usar (invalidar) el token
    public static function useToken(string $token): bool
    {
        $tokenRecord = self::where('token', $token)->first();

        if (!$tokenRecord || $tokenRecord->is_used || $tokenRecord->expires_at?->isPast()) {
            return false;
        }

        $tokenRecord->update(['is_used' => true]);
        return true;
    }

    // ✅ Obtener tokens por botón
    public static function byButton(string $buttonId)
    {
        return self::where('button_id', $buttonId)->get();
    }

    // ✅ Obtener tokens por usuario
    public static function byUser(int $userId)
    {
        return self::where('user_id', $userId)->get();
    }
}
