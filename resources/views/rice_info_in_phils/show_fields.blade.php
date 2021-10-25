<!-- Name Of The Rice Field -->
<div class="col-sm-12">
    {!! Form::label('name_of_the_rice', 'Name Of The Rice:') !!}
    <p>{{ $riceInfoInPhil->name_of_the_rice }}</p>
</div>

<!-- Variety Field -->
<div class="col-sm-12">
    {!! Form::label('variety', 'Variety:') !!}
    <p>{{ $riceInfoInPhil->variety }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $riceInfoInPhil->price }}</p>
</div>

<!-- Most Planted Region Field -->
<div class="col-sm-12">
    {!! Form::label('most_planted_region', 'Most Planted Region:') !!}
    <p>{{ $riceInfoInPhil->most_planted_region }}</p>
</div>

