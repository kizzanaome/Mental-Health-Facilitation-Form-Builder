<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Livewire\Component;

class Posts extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $title;
    public $body;
    public $slug;
    public $image;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\MarkdownEditor::make('body'),
            Forms\Components\TextInput::make('slug')->required(),
            FileUpload::make('image')->image()
            // ...
        ];
    }

    public function submit()
    {
        dd($this->title);
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
