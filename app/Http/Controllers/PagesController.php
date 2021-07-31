<?php

namespace App\Http\Controllers;

use App\models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "WELCOME TO ZIYAD'S TRAINING LARAVEL TESTS";
        return view('pages.index', compact('title'));
        echo "<br>";
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "ABOUT US";
        //return view('pages.about', compact('title'));
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = [
            'title' => 'Services',
            'services'=> ['Web Design', 'Programming', 'SEO']
        ];
        //return view('pages.services', compact('title'));
        return view('pages.services')->with($data);
    }

    public function products(){
        //     $title = 'OUR PRODUCTS';
        //     $data = [
        //         'productOne' => 'php',
        //         'productTwo' => 'html',
        //         'productThree' => 'sql',
        //         'productFour' => 'css'
        //     ];
        // return view('pages.products', compact('title', 'data'));
    
        print_r(route('products'));
        return view('pages.products');
}

    // public function show($name){
    //     $title = 'Selected Product';
    //     $data = [
    //         'testOne' => 'One',
    //         'testTwo' => 2,
    //         'testThree' => '3',
    //         'testFour' => 'Four',
    //         '9' => 9
    //     ];
    //     return view('pages.products', [
    //         'show' => $data[$name] ?? 'Product ' . $name . ' Does not exist'
    //     ]);
    // }


    public function posts(){
        $posts = Post::all();

        return view('pages.posts', compact('posts'));
    }

    public function edit(Post $post){
        return view('pages.edit', 
        ['post' => $post]);
    }

    public function update(Post $post){

        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
        ]);

        $post->update([
            'firstname' => request('firstname'),
            'lastname' => request('lastname')

        ]);

        return redirect('/posts');
    }

    public function create(){

        return view('pages.create');

    }

    public function store(){
        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
        ]);

        Post::create([
            'firstname' => request('firstname'),
            'lastname' =>request('lastname')
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts');
    }

}