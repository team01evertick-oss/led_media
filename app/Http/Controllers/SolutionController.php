<?php

// namespace App\Http\Controllers;

// use App\Models\Solution;

// class SolutionController extends Controller
// {
//     public function index()
//     {
//         $solutions = Solution::where('status', 'published')
//             ->where('is_active', true)
//             ->orderBy('order')
//             ->get();

//         return view('frontend.solutions.index', compact('solutions'));
//     }

//     public function show($slug)
//     {
//         $solution = Solution::where('slug', $slug)
//             ->where('status', 'published')
//             ->where('is_active', true)
//             ->firstOrFail();

//         return view('frontend.solutions.show', compact('solution'));
//     }
// }