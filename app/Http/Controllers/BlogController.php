<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreBlogRequest;
    use App\Models\Blog;
    use App\Models\BlogCategory;
    use App\Models\BlogContent;
    use App\Models\BlogMedia;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
    use Illuminate\Support\Facades\Auth;

    class BlogController extends Controller {
        public function index() {
            $blogs = Auth::user()->blogs()->orderBy('created_at', 'desc')->get();

            return response()->json([
                "data" => $blogs
            ]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreBlogRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreBlogRequest $request) {
            $blog = Auth::user()->blogs()->create($request->validated());

            $uploadedFileUrl = Cloudinary::uploadFile(
                $request->file('image')->getRealPath(),
            )->getSecurePath();

            if(!$uploadedFileUrl)
                return response()->json([
                    "message" => "Unable to upload image"
                ], 400);

            $blog->blogMedia()->create([
                'graphic' => $uploadedFileUrl,
            ]);

            BlogContent::create([
                'blog_id' => $blog->id,
                'contents' => $request->validated()['contents'],
                'active_status' => true
            ]);

            return response()->json([
                "message" => "blog saved successfully",
                "data" => $blog
            ], 201);
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Blog  $blog
         * @return \Illuminate\Http\Response
         */
        public function show(Blog $blog) {
            return view('pages.single-blog', compact('blog'));
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Blog  $blog
         * @return \Illuminate\Http\Response
         */
        public function homepage() {
            $blogs = Blog::orderBy('created_at', 'desc')->get();
            return view('pages.blogs', compact('blogs'));
        }

        public  function storeCategories(Request $request) {
            $request->validate(['category_name' => ['required']]);
            $category = BlogCategory::create([ 'name' => $request->category_name ]);

            return response()->json([
                "message" => "category created",
                "data" => $category,
            ], 201);
        }
    }
