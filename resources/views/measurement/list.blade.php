@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Medidas Cadastradas</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header" style="background-color: rgb(233, 75, 75);">
                    <h3 class="my-2 text-white">Medidas Cadastradas</h3>
                </div>
                <div class="card-body">
                    <div class="container px-5 my-3">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data da Medição</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($measurements as $measurement)
                              <tr>
                                <th scope="row">{{$measurement->id}}</th>
                                <td>{{$measurement->date}}</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              @endforeach
                              
                            </tbody>
                          </table>
                        
                    </div>
                    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                </div>
            </div> {{-- fim do card --}}
        </div> {{-- fim da coluna --}}
    </div> {{-- fim da row --}}
</div> {{-- fim da container --}}
@endsection