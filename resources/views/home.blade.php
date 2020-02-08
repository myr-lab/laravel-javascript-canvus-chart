@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                 <table>
                     <tr>
                         <th width="30%">Title</th>
                         <th width="40%">Body</th>
                         <th width="30%">Action</th>
                     </tr>
                     
                         @foreach ($posts as $item)
                         <tr>
                            <td> {{ $item->title }} </td>
                            <td> {{ $item->body }} </td>
                            <td>

                                @can('isAuthor')
                              <a href="">Edit</a> | <a href="">Delete</a>
                                @endcan
                            </td>
                        </tr>
                         @endforeach
                    
                 </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
