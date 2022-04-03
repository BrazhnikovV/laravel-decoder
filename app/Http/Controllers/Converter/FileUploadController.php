<?php

namespace App\Http\Controllers\Converter;

use App\Http\Controllers\Controller;
use App\Models\Converter\File;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * @FileUploadController
 */
class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('converting.index');
    }
}
