@extends('layouts.inc')
@section('content')
    This the homepage
    @if($post>0)
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                  <th>Name</th>
                    </tr>
                      </thead>
        @foreach ($post as $item)
        <br>   
                    <tbody>
                        <tr>
                            <td> {{$item}} </td>
                        </tr>
                    </tbody>
        @endforeach
    </table>
</div>
    @endif
@endsection