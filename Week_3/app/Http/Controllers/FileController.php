<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
	public function uploadFile(Request $request)
	{
		$path = $request->file('myfile')->store('uploads','public');
		// return $path;

		$filenameArray = explode('/',$path);
		$filename = $filenameArray[1];
		return view('upload', ['path' => $filename]);
		
		return $filename;
	}
}


