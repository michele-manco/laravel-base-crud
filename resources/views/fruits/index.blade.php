@extends('layouts.main')
@section('page-title', 'Index Fruits')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="pull-left">Lista Frutta</h1>

        <a class="btn btn-success pull-right" href="{{ route('fruits.create')}}">Inserisci Frutta</a>

        <table class="table">
          <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Varieta</th>
                <th>Azioni</th>
              </tr>
            </thead>

            @forelse ($fruits as $fruit)
              <tr>
                <td>
                  {{ $fruit->id }}
                </td>
                <td>
                  {{ $fruit->name }}
                </td>
                <td>
                  {{ $fruit->peso }}
                </td>
                <td>
                  {{ $fruit->varieta }}
                </td>
                <td>
                  <button class"btn btn-info">
                  <a  href="{{ route('fruits.show', ['fruit' => $fruit->id]) }}" >Visualizza</a>
                  </button>
                </td>
              </tr>
            @empty
                  <tr>
                      <td colspan="5">Non c'è alcun frutto!</td>
                  </tr>

            @endforelse
      </table>


      </div>

    </div>


  </div>
  @endsection
