@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach($parentCategories as $category)
                    <ul>
                    {{$category->name}}
                        @if(count($category->subcategory))
                        @include('subcat',['subcategories' => $category->subcategory])
                     @endif
                    </ul> 
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
