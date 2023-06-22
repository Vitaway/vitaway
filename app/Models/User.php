<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Passport\HasApiTokens;
    use Laratrust\Traits\LaratrustUserTrait;

    class User extends Authenticatable {
        use HasApiTokens,
            HasFactory,
            Notifiable,
            LaratrustUserTrait;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'name',
            'email',
            'password',
            'provider',
            'provider_id',
            'provider_token',
            'provider_remember_token',
            'email_verified_at',
            'avatar'
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
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        /**
         * User has one social medias
         * @return HasOne
         */
        public function socialMedia() {
            return $this->hasOne(SocialMedia::class);
        }

        /**
         * User has many blogs
         * @return HasMany
         */
        public function blogs() {
            return $this->hasMany(Blog::class);
        }
    }
