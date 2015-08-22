<?php

namespace Makersblog\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Makersblog\Http\Requests;
use Makersblog\Http\Controllers\Controller;
use Makersblog\Services\UploadsManager;

class UploadController extends Controller
{
    protected $manager;

    public function __construct(UploadsManager $manager)
    {
    	$this->manager = $manager;
    }

    public function index(Request $request)
    {
    	$folder = $request->get('folder'); 
    	$data = $this->manager->folderInfo($folder);
 
    	return view('admin.upload.index', $data);
    }
}
