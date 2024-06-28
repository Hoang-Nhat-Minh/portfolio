<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Validated;

use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

use App\ProfileInfo;
use App\Job;
use App\ResumeInfo;
use App\Skill;
use App\Contact;
use App\GalleryCategory;
use App\GalleryContent;


class BaseController extends Controller
{
    public function index()
    {
        $profile_infos = ProfileInfo::first();
        $jobs = Job::get();
        $educations = ResumeInfo::where('type', 'EDUCATION')->get();
        $experiances = ResumeInfo::where('type', 'EXPERIENCE')->get();
        $overall_skills = Skill::where('type', 'OVERALL')
            ->orderBy('rate', 'desc')
            ->get();
        $languages = Skill::where('type', 'LANGUAGES')
            ->orderBy('rate', 'desc')
            ->get();
        $knowledges = Skill::where('type', 'KNOWLEDGE')
            ->orderBy('rate', 'desc')
            ->get();

        $categories = Category::get();
        $posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->get();

        $gallery_categories = GalleryCategory::get();
        $galleries = GalleryContent::get();

        return view('frontend.home.index', compact('profile_infos', 'jobs', 'educations', 'experiances', 'overall_skills', 'languages', 'knowledges', 'categories', 'posts', 'gallery_categories', 'galleries'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|max:255',
                'content' => 'required',
            ], [
                'name.required' => 'The name field is required.',
                'name.max' => 'The name may not be greater than 255 characters.',
                'email.required' => 'The email field is required.',
                'email.max' => 'The email may not be greater than 255 characters.',
                'content.required' => 'The content field is required.'
            ]);
        } catch (ValidationException $exception) {
            return redirect('/#contact')
                ->withErrors($exception->validator)
                ->withInput();
        }

        Contact::create($validatedData);

        $alert = [
            "type" => "success",
            "title" => __("Success!"),
            "body" => __("Thank you! I will respond as soon as possible!")
        ];

        return redirect()->back()->with('alert', $alert);
    }
}
