<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class BlogCategory extends Model {
        use HasFactory;

        protected $fillable = ['name'];

        /**
         * Blog belongs to blog category
         *
         * @return HasMany
         */
        public function blogs(): HasMany {
            return $this->hasMany(Blog::class);
        }
    }
