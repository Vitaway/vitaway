<?php
    namespace App\Http\Controllers;

    use App\Http\Requests;
    use App\Models\Blog;
    use App\Models\BlogCategory;
    use Illuminate\Http\Request;

    class AdminController extends Controller {
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
        public function dashboard() {
            $blogs = Blog::with(['blogMedia', 'blogCategory'])->orderBy('created_at', 'desc')->get();
            $categories = BlogCategory::orderBy('created_at', 'desc')->get();

            return view('auth.dashboard', compact('blogs', 'categories'));
        }

        /**
         * Show user profile view
         */
        public function profile() {
            return view('auth.Admin.profile');
        }
    }
