<?php


namespace App\Http\Controllers\PublicVisibility\Web\Blog;

use App\Http\Controllers\Abstracted\WebController;
use App\Services\Blog\Interfaces\Repositories\BlogPostRepositoryInterface;
use App\Services\DebugBarManager\Abstracted\DebugBarManagerAbstracted;
use App\Services\Logger\Abstracted\LoggerAbstract;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Routing\Redirector;

class BlogPostController extends WebController
{
    protected string $bar_label = 'Blog Post Web Controller';

    public function __construct(LoggerAbstract $logger,
                                DebugBarManagerAbstracted $debugBarManager,
                                Redirector $redirector,
                                ViewFactory $viewFactory,
                                BlogPostRepositoryInterface $blogPostRepository
    )
    {
        parent::__construct($logger, $debugBarManager, $redirector, $viewFactory);
    }

    public function experiment()
    {
        return $this->viewFactory->make('public.blog.blog-master');
    }
}
