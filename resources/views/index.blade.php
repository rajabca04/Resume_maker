@extends('base')

@section('contant')

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-9">
               <table>
                   @foreach ($data as $item)


                   <td>{{ $item ->id}},</td>
                   <td>{{ $item ->name}},</td>
                   <td>{{ $item ->email}},</td>
                   <td>{{ $item ->contact}},</td>
                   <td>{{ $item ->streem}},</td>
                   <td>{{ $item ->technology}},</td>
                   <td>{{ $item ->exprience}},</td>
                   <td>{{ $item ->description}}</td>
                   @endforeach
               </table>
            </div>
            <div class="col-lg-3">
                <div class="card bg-info">
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
                                <textarea name="description" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>

                                <input type="submit" class="btn btn-dark w-100">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
