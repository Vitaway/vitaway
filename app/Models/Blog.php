<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;

    class Blog extends Model {
        use HasFactory;

        protected $fillable = [
            'blog_category_id',
            'title',
            'caption',
            'slug',
        ];

        /**
         * Blog hasmany likes
         *
         * @return HasMany
         */
        public function blogLikes(): HasMany {
            return $this->hasMany(BlogLike::class);
        }

        /**
         * Blog has many dislikes
         *
         * @return HasMany
         */
        public function blogDislikes(): HasMany {
            return $this->hasMany(BlogDislike::class);
        }

        /**
         * Blog has many comments
         *
         * @return HasMany
         */
        public function blogComments(): HasMany {
            return $this->hasMany(BlogComment::class);
        }

        /**
         * Blog belongs to blog category
         *
         * @return BelongsTo
         */
        public function blogCategory(): BelongsTo {
            return $this->belongsTo(BlogCategory::class);
        }

        /**
         * Blog hasmany content
         *
         * @return HasOne
         */
        public function blogContent(): HasOne {
            return $this->hasOne(BlogContent::class);
        }


        /**
         * Check if given blog already exist
         *
         * @param Blog $blogId
         */
        public static function doesExist(int $blogId) {
            return Blog::where('id', $blogId)->first() ?? false;
        }

        /**
         * Blog Has many media
         * @return HasOne
         */
        public function blogMedia(): HasOne {
            return $this->hasOne(BlogMedia::class);
        }

        /**
         * Blog belongs to user
         * @return BelongsTo
         */
        public function user() {
            return $this->belongsTo(User::class);
        }
    }
