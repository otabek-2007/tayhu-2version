<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutBanner;
use App\Models\Blog;
use App\Models\CompanyAdvantage;
use App\Models\IntoFuture;
use App\Models\OurProject;
use App\Models\Partner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProjectCategory;
use App\Models\Showroom;
use App\Models\Team;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        $projects = OurProject::with('category')->get();
        $teams = Team::all();
        $blogs = Blog::all();
        $partners = Partner::all();
        $construction = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Construction');
        })->with('category')->get();

        $electrical = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Electrical');
        })->with('category')->get();

        $architect = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Architect');
        })->with('category')->get();

        $building = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Building');
        })->with('category')->get();

        $banners = AboutBanner::all();
        $intoFuture = IntoFuture::first();

        // Return the view with the data
        return view('frontend.index', compact('banners', 'teams', 'blogs', 'intoFuture', 'projects', 'partners', 'construction', 'building', 'architect', 'electrical'));
    }
    public function about()
    {
        $partners = Partner::all();
        $about = IntoFuture::all();
        $company_advantages = CompanyAdvantage::all();
        return view('frontend.about', compact('about', 'company_advantages', 'partners'));
    }

    public function blog()
    {
        $blogs = Blog::paginate(9);
        return view('frontend.blog', compact('blogs'));
    }
    public function showroom()
    {
        $showroom = Showroom::all();
        return view('frontend.showroom', compact('showroom'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);
        return view('frontend.blog_single', compact('blog'));
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
        $teams = Team::all();
        return view('frontend.team', compact('teams'));
    }
    public function service($id)
    {
        $products = Product::where('category_id', $id)->paginate(10);
        $categories = ProductCategory::withCount('products')->get();

        return view('frontend.service', compact('products', 'categories'));
    }
    public function serviceSearch(Request $request)
    {
        $categories = ProductCategory::withCount('products')->get();
        $query = Product::query();

        $query->when($request->has('query'), function ($query) use ($request) {
            $searchTerm = $request->input('query');
            $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
        });
        dd($request->input('filter'));

        $query->when($request->has('filter'), function ($query) use ($request) {
            switch ($request->input('filter')) {
                case 'recent':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'low_to_high':
                    $query->orderBy('price', 'asc');
                    break;
                case 'high_to_low':
                    $query->orderBy('price', 'desc');
                    break;
                case 'new_added':
                    $query->orderBy('updated_at', 'desc');
                    break;
            }
        });

        $products = $query->paginate(10);
        return view('frontend.service', compact('products', 'categories'));
    }




    public function serviceSingle($id)
    {
        $singleProduct = Product::find($id);
        $category_id = $singleProduct->category_id;

        $categoryProduct = Product::where('category_id', $category_id)->get();

        return view('frontend.service_single', compact('singleProduct', 'categoryProduct'));
    }

    public function projects()
    {
        $projects = OurProject::with('category')->get();

        $construction = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Construction');
        })->with('category')->get();

        $electrical = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Electrical');
        })->with('category')->get();

        $architect = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Architect');
        })->with('category')->get();

        $building = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Building');
        })->with('category')->get();
        return view('frontend.projects', compact('projects', 'construction', 'building', 'architect', 'electrical'));
    }
    public function projectSingle($id)
    {
        return view('frontend.project_single');
    }
}
