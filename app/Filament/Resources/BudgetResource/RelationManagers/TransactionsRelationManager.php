<?php

namespace App\Filament\Resources\BudgetResource\RelationManagers;

use App\Filament\Resources\TransactionResource;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\Summarizers\Average;
use Filament\Tables\Columns\Summarizers\Range;
use Filament\Tables\Columns\TextColumn;


class TransactionsRelationManager extends RelationManager
{
    protected static string $relationship = 'transactions';

    public function form(Form $form): Form
    {
        return (new TransactionResource())->form($form);
    }

    public function table(Table $table): Table
    {
        return (new TransactionResource())->table($table);
    }
    
}
