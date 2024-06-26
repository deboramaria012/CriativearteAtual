@extends('layoutdash.layout')

@section('conteudo-dash')

<form class="form-wrp" action="{{ route('admin.aluno.cad') }}" method="POST" enctype="multipart/form-data"></form>
 @csrf
 <div class="row mrg20">
    <div class="col-md-6 col-sm-6 col-lg-6">
    <input class="brd-rd5 @error('estadoAlunoo') is-invalid @enderror" type="text" id="nomeAlunoo" name="nomeAlunoo" placeholder="Nome*"
        value="{{ old('nomeAlunoo') }}" required/>
        @error('nomeAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
 </div>
 @endsection
