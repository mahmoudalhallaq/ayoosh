<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'text', 'image', 'category', 'created_by'];

    public function comments(){
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
    public function CategoryName($numCat){
        switch ((int)$numCat) {
            case 0:
                $category_name = "All";
                break;
            case 1:
                $category_name = "Creative";
                break;
            case 2:
                $category_name = "Design";
                break;
            case 3:
                $category_name = "Business";
                break;
            case 4:
                $category_name = "Web Development";
                break;
            default:
                $category_name = "All";
                break;
        }
        return $category_name;
    }

    public function ArticleComments($article_id){
        return "100";
    }

}
