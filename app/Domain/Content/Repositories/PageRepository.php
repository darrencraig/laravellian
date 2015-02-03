<?php namespace App\Domain\Content\Repositories;

interface PagesRepository
{
    function findBySlug($slug);
}