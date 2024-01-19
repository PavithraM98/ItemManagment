<?php

// app/Repositories/PostRepository.php

namespace App\Repository;

use App\Models\Post;

class PostRepository
{
    public function getAllPosts()
    {
        return Post::all();
    }

    public function getPostById($id)
    {
        return Post::find($id);
    }

    public function createPost($data)
    {
        return Post::create($data);
    }

    public function updatePost($id, $data)
    {
        $post = $this->getPostById($id);
        $post->update($data);
        return $post;
    }

    public function deletePost($id)
    {
        $post = $this->getPostById($id);
        $post->delete();
    }
}
