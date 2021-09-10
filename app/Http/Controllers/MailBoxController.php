<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailBox;
use PhpParser\Node\Stmt\Return_;

class MailBoxController extends Controller
{
     public function index()
    {
        return view('MailBox.create');
    }

    public function create()
    {
        return view('MailBox.create');
    }

    public function store(Request $request)
    {
        $MailBox = MailBox::create($request->all());

        return redirect()->route('MailBox.create');
    }

}
