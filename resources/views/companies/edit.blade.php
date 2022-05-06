@extends('layout.app')
@section('content')
    <h1 class="text-center p-3">tashkilot malumotlarini uzgartirish</h1>

    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('companies.update',['company'=>$company->id]) }}">
                @method('PUT')
                @csrf
                @include('companies.form')

                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection

