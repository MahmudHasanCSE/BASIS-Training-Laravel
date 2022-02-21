<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    private $firstNumber;
    private $secondNumber;
    private $operator;
    private $result;

    private $blogs;
    //

    public function index()
    {
        return view('home');
    }

    public function calculator(Request $request)
    {
        $this->firstNumber  = $request->first_number;
        $this->secondNumber = $request->second_number;
        $this->operator     = $request->operator;


        switch ($this->operator)
        {
            case '+':
                $this->result = $this->firstNumber + $this->secondNumber;
                break;
            case '-':
                $this->result = $this->firstNumber - $this->secondNumber;
                break;
            case '*':
                $this->result = $this->firstNumber * $this->secondNumber;
                break;
            case '/':
                $this->result = $this->firstNumber / $this->secondNumber;
                break;
            case '%':
                $this->result = $this->firstNumber % $this->secondNumber;
                break;
        }

        return view('calculator', [
            'a' => $this->firstNumber,
            'b' => $this->secondNumber,
            'c' => $this->result,
        ]); // a, b and c is index in here, and variable in calculator
    }

    public function blog()
    {
        $this->blogs = Blog::getAllBlog();
        return view('blog', ['blogs' => $this->blogs]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($blogID)
    {
        $this->blogs = Blog::getAllBlog();
        foreach ($this->blogs as $item)
        {
            if ($item['id'] == $blogID)
            {
                return view('detail', ['data' => $item]);
            }
        }
    }
}
