@extends('admin.layout.admin')
@section('content')

<h3>Add Pool Designs</h3>
<div class="row">

    <div class="col-md-6 col-md-offset-3">

        {!! Form::open(['route'=>'pools.store','method'=>'post','files'=>true]) !!}
            
            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class'=>'form-control'))}}
            </div>    

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class'=>'form-control'))}}
            </div>  

            <div class="form-group">
                {{ Form::label('area', 'Area') }}
                {{ Form::text('area', null, array('class'=>'form-control'))}}
            </div>  

            <div class="form-group">
                {{ Form::label('depth', 'Depth') }}
                {{ Form::text('depth', null, array('class'=>'form-control'))}}
            </div>  

            <div class="form-group">
                {{ Form::label('cost', 'Cost') }}
                {{ Form::text('cost', null, array('class'=>'form-control'))}}
            </div>  

            <div class="form-group">
                {{ Form::label('category_id', 'Category ID') }}
                {{ Form::select('category_id', $categories, null, ['class'=>'form-control', 'placeholder'=>'Select Category'])}}
            </div>  

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image', array('class'=>'form-control'))}}
            </div>  

            {{ Form::submit('Create', array('class'=>'btn btn-default'))}}

        {!! Form::close() !!}

    </div>
</div>

@endsection