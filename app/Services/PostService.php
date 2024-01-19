<?php

// app/Services/PostService.php

namespace App\Services;

use App\Repository\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->getAllPosts();
    }
    public function getPostById($id)
    {
        return $this->postRepository->getPostById($id);
    }
    public function createPost($data)
    {
        return $this->postRepository->createPost($data);
    }

    public function updatePost($id, $data)
    {
        return $this->postRepository->updatePost($id, $data);
    }

    public function deletePost($id)
    {
        $this->postRepository->deletePost($id);
    }
}
