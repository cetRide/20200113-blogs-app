<?php
namespace App\Repositories;

interface BlogRepositoryInterface
{

    public function get($id);

    public function all();

    public function deleteBlog($id);

    public function update($id, array $blog_data);
}
