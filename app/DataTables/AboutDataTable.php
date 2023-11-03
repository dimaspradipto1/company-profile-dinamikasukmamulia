<?php

namespace App\DataTables;

use App\Models\About;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;


class AboutDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                return '
            <a href="' . route('about.edit', $item->id) . '" class="btn btn-sm btn-warning text-white mb-2 px-3">Edit</a>
            <form action="' . route('about.destroy', $item->id) . '" method="POST" class="d-inline">
            ' . method_field('delete') . csrf_field() . '
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</button>
            </form>
            ';
            })
            
            ->setRowId('DT_RowIndex');
            
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(About $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('about-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('DT_RowIndex')->title('No'),
            Column::make('judul_sejarah'),
            Column::make('sejarah_description'),
            Column::make('judul_filosofi'),
            Column::make('filosofi_description'),
            Column::computed('action')
                ->exportable(true)
                ->printable(true)
                ->width(60)
                ->addClass('text-center'),
        ];
    }
 
    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'About_' . date('YmdHis');
    }
}
