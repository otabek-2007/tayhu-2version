<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogSingle()
    {
        return view('frontend.blog_single');
    }
    public function catalog()
    {

        $totalFaqs = ProductCategory::count();
        $halfCount = ceil($totalFaqs / 2);

        $category_first = ProductCategory::orderBy('id', 'desc')->take($halfCount)->withTranslations()->get();

        $category_second = ProductCategory::orderBy('id', 'asc')->take($totalFaqs - $halfCount)->withTranslations()->get();

        return view('frontend.catalog', compact("category_first", "category_second"));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function team()
    {
        return view('frontend.team');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function serviceSingle()
    {
        return view('frontend.service_single');
    }

    public function projects()
    {
        return view('frontend.projects');
    }
    public function projectSingle()
    {
        return view('frontend.project_single');
    }
}
