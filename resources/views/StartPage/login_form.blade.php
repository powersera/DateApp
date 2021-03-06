<div class="form-group form-field">
    {{ Form::text('name', null,  array_merge(['class' => 'form-control'], ['placeholder' => 'name'])) }}
</div>
<div class="col-sm-12">
    <h6 class="validation-error">{{$errors->first('name')}}</h6>
</div>

<div class="form-group form-field">
    {{ Form::text('surname', null,  array_merge(['class' => 'form-control'], ['placeholder' => 'surname'])) }}
</div>

<div class="col-sm-12">
    <h6 class="validation-error">{{$errors->first('surname')}}</h6>
</div>

<div class="form-group form-field">
    {{ Form::password('password',  array_merge(['class' => 'form-control'], ['placeholder' => 'password'])) }}
</div>

<div class="col-sm-12">
    <h6 class="validation-error">{{$errors->first('password')}}</h6>
</div>
<div class="form-group">
    {{ Form::submit('Login', ['class' => 'btn btn-success']) }}
</div>
