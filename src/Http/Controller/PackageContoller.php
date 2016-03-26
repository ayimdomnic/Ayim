<?php

namespace Ayim\Package\Http;

use App\Http\Controller;


class PackageController extends Controller;
{
	public function getallPackages()
	{
		return view('package:package-list');
	}
}