<!-- Name Of The Rice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_of_the_rice', 'Name Of The Rice:') !!}
    {!! Form::text('name_of_the_rice', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Variety Field -->
<div class="form-group col-sm-6">
    {!! Form::label('variety', 'Variety:') !!}
    {!! Form::text('variety', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Most Planted Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('most_planted_region', 'Most Planted Region:') !!}
    {!! Form::text('most_planted_region', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>