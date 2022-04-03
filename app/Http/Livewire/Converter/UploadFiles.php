<?php

namespace App\Http\Livewire\Converter;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Converter\File;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

/**
 * @UploadFiles
 * @author V.Brazhnikov
 */
class UploadFiles extends Component
{
    /**
     * @trait WithFileUploads
     */
    use WithFileUploads;

    /**
     * @var $file
     */
    public $file;

    /**
     * @var File $fileModel
     */
    public File $fileModel;

    /**
     * @param File $fileModel
     * @return void
     */
    public function mount(File $fileModel): void
    {
        $this->fileModel = $fileModel;
    }

    /**
     * @return Redirector
     */
    public function save(): Redirector
    {
        $this->validate([
            'file' => 'required|mimes:txt,pdf|max:102400', // 100MB Max
        ]);

        $name = $this->file->getClientOriginalName();
        $path = $this->file->store('files');

        // !Fixme - добавить сервис(через инъекцию желательно), который сохранит данные файла в базу
        $this->fileModel->name = $name;
        $this->fileModel->path = $path;
        $this->fileModel->user_id = Auth::user()->id;
        $this->fileModel->save();

        return redirect('converting')->with('status', 'File Has been uploaded successfully in laravel');
    }
}
