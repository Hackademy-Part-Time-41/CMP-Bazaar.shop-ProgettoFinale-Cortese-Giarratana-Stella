<?php

namespace App\Livewire;

use App\Models\Article;
use App\Jobs\ResizeImage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:5|max:30')]
    public $title;
    #[Validate('required|min:10')]
    public $description;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;

    public $images = [];
    public $temporary_images;

    public function store()
    {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                dispatch(new ResizeImage($newImage->path, 300, 300));
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        // if (count($this->images) > 0) {
        //     foreach ($this->images as $image) {
        //         $this->article->images()->create(['path' => $image->store('images', 'public')]);
        //     }
        // }
        // $this->reset();

        // session()->flash('success', 'Articolo creato correttamente');

        return redirect()->route('article.draft', $this->article)->with('success', 'Articolo in attesa di revisione');
    }

    public function updatedTemporaryImages() {
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ])){
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        };
    }

    public function removeImage($key) {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }


    public function render()
    {
        return view('livewire.create-article-form');
    }
}
