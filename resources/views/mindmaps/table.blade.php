<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="mindmaps-table">
            <thead>
            <tr>
                <th>Judul</th>
                <th>Subjudul</th>
                <th>Posisi</th>
                <th>Red</th>
                <th>Green</th>
                <th>Blue</th>
                <th>Is Kanan</th>
                <th>Mindmap Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mindmaps as $mindmap)
                <tr>
                    <td>{{ $mindmap->judul }}</td>
                    <td>{{ $mindmap->subjudul }}</td>
                    <td>{{ $mindmap->posisi }}</td>
                    <td>{{ $mindmap->red }}</td>
                    <td>{{ $mindmap->green }}</td>
                    <td>{{ $mindmap->blue }}</td>
                    <td>{{ $mindmap->is_kanan }}</td>
                    <td>{{ $mindmap->mindmap_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['mindmaps.destroy', $mindmap->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('mindmaps.show', [$mindmap->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('mindmaps.edit', [$mindmap->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $mindmaps])
        </div>
    </div>
</div>
