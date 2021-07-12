@extends('base')

@section('contant')

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-9">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gmail</th>
                        <th>contact</th>
                    </tr>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->contact}}</td>
                            <td><a href="" class="btn btn-info">View</a></td>
                            <td><a href="" class="btn btn-dark">Modify</a></td>
                            <td><a href="" class="btn btn-danger">Kill</a></td>
                        </tr>

                    @endforeach

                </table>

            </div>
            <div class="col-lg-3">
                <div class="card bg-info">
                    <div class="mx-auto mt-3    "><h4>Make your resume.</h4></div>
                    <div class="card-body">
                        <form action="{{ route('input') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="">Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="">Contact:</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="">Streem:</label>
                                <input type="text" name="streem" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="">Technology:</label>
                                <input type="text" name="technology" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="">expraince:</label>
                                <input type="text" name="exprience" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="">Description:</label>
                                <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>

                                <input type="submit" class="btn btn-dark w-100">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
