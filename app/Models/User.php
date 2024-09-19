<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Mockery\Matcher\Subset;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class, 'teachers_disciplines');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'students_lessons')->withPivot('is_completed', 'completed_at');
    }

    public function canAccessPanel(string $panel): bool
    {
        // Supondo que você tenha uma propriedade 'role' ou algo similar no seu modelo de usuário
        $rolesAllowed = [
            'teacherPanel' => ['professor', 'admin'],
            'admin' => ['admin'],
            // Adicione outros painéis e suas permissões conforme necessário
        ];
    
        if (!array_key_exists($panel, $rolesAllowed)) {
            return false;
        }
    
        return in_array($this->role, $rolesAllowed[$panel]);
    }

        public function questions()
    {
        return $this->hasMany(QuestionForum::class);
    }

    public function answers()
    {
        return $this->hasMany(AnswerForum::class);
    }
}
