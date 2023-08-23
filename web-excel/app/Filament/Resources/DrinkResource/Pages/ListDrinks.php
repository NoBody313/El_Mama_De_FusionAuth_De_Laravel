<?php

namespace App\Filament\Resources\DrinkResource\Pages;

use App\Filament\Resources\DrinkResource;
use App\Imports\ImportDrinks;
use App\Models\Drink;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ListDrinks extends ListRecords
{
    protected static string $resource = DrinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getHeader(): ?View
    {
        $data = Actions\CreateAction::make();
        return view('filament.custom.upload-file', compact('data'));
    }

    public $file ='';

    public function save()
    {
        if ($this -> file != '')
        {
            Excel::import(new ImportDrinks, $this -> file);
        }
    }
}
