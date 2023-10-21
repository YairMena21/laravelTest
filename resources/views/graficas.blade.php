@extends('layouts.master')

@section('content')

    <div class="py-12">
      <chart-component :datos="{{ json_encode($datos) }}"></chart-component>
    </div>
@endsection