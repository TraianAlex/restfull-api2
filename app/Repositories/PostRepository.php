<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{
	private $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function all()
	{
		return $this->post->all();
	}

	public function create($data)
	{
		return 1;//the id of PostService@create
	}
}