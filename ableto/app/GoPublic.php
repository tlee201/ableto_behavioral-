<?php 

// class was used to help point to my public directory do to shared hosting I'm using from my personal web site

namespace App;

class GoPublic extends \Illuminate\Foundation\Application{
	/**
	* Get the path to the public / web directory.
	*
	* @return string
	*/
	public function publicPath(){
		return $this->basePath.DIRECTORY_SEPARATOR.'my directory is appended here'; // example ../../mydirectory
	}
}
