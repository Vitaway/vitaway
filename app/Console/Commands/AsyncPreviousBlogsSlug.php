<?php

    namespace App\Console\Commands;

    use App\Models\Blog;
    use Illuminate\Console\Command;
    use Illuminate\Support\Str;

    class AsyncPreviousBlogsSlug extends Command {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'async:blogs';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Command description';

        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct() {
            parent::__construct();
        }

        /**
         * Execute the console command.
         *
         * @return int
         */
        public function handle() {
            foreach(Blog::all() as $blog) {
                $blog->slug = Str::slug(Str::random(10).'-'.$blog->title);
                $blog->save();
            }
        }
    }
