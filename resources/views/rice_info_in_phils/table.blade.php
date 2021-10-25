<div class="table-responsive">
    <table class="table" id="riceInfoInPhils-table">
        <thead>
            <tr>
                <th>Name Of The Rice</th>
        <th>Variety</th>
        <th>Price</th>
        <th>Most Planted Region</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($riceInfoInPhils as $riceInfoInPhil)
            <tr>
                <td>{{ $riceInfoInPhil->name_of_the_rice }}</td>
            <td>{{ $riceInfoInPhil->variety }}</td>
            <td>{{ $riceInfoInPhil->price }}</td>
            <td>{{ $riceInfoInPhil->most_planted_region }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['riceInfoInPhils.destroy', $riceInfoInPhil->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('riceInfoInPhils.show', [$riceInfoInPhil->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('riceInfoInPhils.edit', [$riceInfoInPhil->id]) }}" class='btn btn-default btn-xs'>
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
