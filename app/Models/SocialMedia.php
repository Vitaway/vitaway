<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class SocialMedia extends Model {
        use HasFactory;

        protected $fillable = [
            'facebook',
            'twitter',
            'instagram',
            'linkedin',
            'youtube',
            'bio'
        ];

        /**
         * social medias belongs to user
         */
        public function user():BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
