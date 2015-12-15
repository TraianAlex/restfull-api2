<?php

namespace App\Services;

use App\Repositories\PostRepository;

class Postservice
{
	$private $postRepository;
	
	public function __construct(PostRepository $postRepository)
	{
		$this->postRepository = $postRepository;
	}
	/**
	 * Here all the business logic
	 */
	public function create($data)
	{
		$post = $this->postRepository->create($data);
		//send email
		//notified user
		//tracback
		//commentary
		return $post;
	}
}