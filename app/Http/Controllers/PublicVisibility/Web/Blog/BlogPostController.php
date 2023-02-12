<?php


namespace App\Http\Controllers\PublicVisibility\Web\Blog;

use App\Http\Controllers\Abstracted\WebController;
use App\Services\Blog\Abstracted\BlogServiceAbstract;
use App\Services\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\Services\Logger\Abstracted\LoggerAbstract;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BlogPostController extends WebController
{
    protected string $bar_label = 'Blog Post Web Controller';

    public function __construct(LoggerAbstract $logger,
                                DebugBarManagerAbstracted $debugBarManager,
                                Redirector $redirector,
                                ViewFactory $viewFactory,
                                BlogServiceAbstract $blogService
    )
    {
        parent::__construct($logger, $debugBarManager, $redirector, $viewFactory);
    }

    public function showIndexBlogView(Request $request)
    {
        return $this->viewFactory->make('public.blog.post.blog-post-list');
    }

    public function showCreateBlogPostView(Request $request)
    {
        return $this->viewFactory->make('public.blog.post.blog-post-create');
    }

    public function showUpdateBlogPostView(Request $request)
    {
        return $this->viewFactory->make('public.blog.post.blog-post-update');
    }

    public function createBlogPostAction(Request $request)
    {
        $data = $request->all();
        $file = $request->file('post-preview-img');

        return response()->json();
    }

    public function updateBlogPostAction(Request $request)
    {

    }

    public function deleteBlogPostAction(Request $request)
    {

    }


}
