@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastrar Medidas</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header" style="background-color: rgb(233, 75, 75);">
                    <h3 class="my-2 text-white">Cadastrar</h3>
                </div>
                <div class="card-body">
                    <div class="container px-5 my-3">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                            {{-- Data --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="data" type="date" placeholder="Data"
                                    data-sb-validations="required" />
                                <label for="pesoKg">Data da medição</label>
                                <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Data é obrigatória.
                                </div>
                            </div>

                            {{-- Peso --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="pesoKg" type="text" placeholder="Peso(kg)"
                                    data-sb-validations="required" />
                                <label for="pesoKg">Peso(kg)</label>
                                <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso(kg) é obrigatório.
                                </div>
                            </div>

                            {{-- Altura --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="alturaCm" type="text" placeholder="Altura(cm)"
                                    data-sb-validations="required" />
                                <label for="alturaCm">Altura(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="alturaCm:required">Altura(cm) é
                                    obrigatório.</div>
                            </div>

                            {{-- Peitoral --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="peitoralCm" type="text" placeholder="Peitoral(cm)"
                                    data-sb-validations="required" />
                                <label for="peitoralCm">Peitoral(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="peitoralCm:required">Peitoral(cm) é
                                    obrigatório.</div>
                            </div>

                            {{-- Braço Esquerdo --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="bracoEsquerdoCm" type="text"
                                    placeholder="Braço Esquerdo(cm)" data-sb-validations="required" />
                                <label for="bracoEsquerdoCm">Braço Esquerdo(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="bracoEsquerdoCm:required">Braço
                                    Esquerdo(cm) é obrigatório.</div>
                            </div>

                            {{-- Braço Direito --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="bracoDireitoCm" type="text"
                                    placeholder="Braço Direito(cm)" data-sb-validations="required" />
                                <label for="bracoDireitoCm">Braço Direito(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="bracoDireitoCm:required">Braço
                                    Direito(cm) é obrigatório.</div>
                            </div>

                            {{-- Abdômen --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="abdomenCm" type="text" placeholder="Abdômen(cm)"
                                    data-sb-validations="required" />
                                <label for="abdomenCm">Abdômen(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="abdomenCm:required">Abdômen(cm) é
                                    obrigatório.</div>
                            </div>

                            {{-- Cintura --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="cinturaCm" type="text" placeholder="Cintura(cm)"
                                    data-sb-validations="required" />
                                <label for="cinturaCm">Cintura(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="cinturaCm:required">Cintura(cm) é
                                    obrigatório.</div>
                            </div>

                            {{-- Quadril --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="quadrilCm" type="text" placeholder="Quadril(cm)"
                                    data-sb-validations="required" />
                                <label for="quadrilCm">Quadril(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="quadrilCm:required">Quadril(cm) é
                                    obrigatório.</div>
                            </div>

                            {{-- Coxa Esquerda --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="coxaEsquerdaCm" type="text"
                                    placeholder="Coxa Esquerda(cm)" data-sb-validations="required" />
                                <label for="coxaEsquerdaCm">Coxa Esquerda(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="coxaEsquerdaCm:required">Coxa
                                    Esquerda(cm) é obrigatório.</div>
                            </div>

                            {{-- Coxa Direita --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="coxaDireitaCm" type="text"
                                    placeholder="Coxa Direita(cm)" data-sb-validations="required" />
                                <label for="coxaDireitaCm">Coxa Direita(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="coxaDireitaCm:required">Coxa Direita(cm)
                                    é obrigatório.</div>
                            </div>

                            {{-- Panturrilha Esquerda --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="panturrilhaEsquerdaCm" type="text"
                                    placeholder="Panturrilha Esquerda(cm)" data-sb-validations="required" />
                                <label for="panturrilhaEsquerdaCm">Panturrilha Esquerda(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="panturrilhaEsquerdaCm:required">
                                    Panturrilha Esquerda(cm) é obrigatório.</div>
                            </div>

                            {{-- Panturrilha Direita --}}
                            <div class="form-floating mb-3 shadow-sm">
                                <input class="form-control" id="panturrilhaDireitaCm" type="text"
                                    placeholder="Panturrilha Direita(cm)" data-sb-validations="required" />
                                <label for="panturrilhaDireitaCm">Panturrilha Direita(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="panturrilhaDireitaCm:required">
                                    Panturrilha Direita(cm) é obrigatório.</div>
                            </div>

                            {{-- Submit --}}
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Cadastro feito com sucesso!</div>
                                    {{-- <p>To activate this form, sign up at</p>
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    --}}
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Erro no cadastro</div>
                            </div>
                            <div class="d-flex" style="float: right">
                                <button class="btn btn-secondary btn-lg me-1 flex-fill" id="clearButton" type="reset">Limpar</button>
                                <button class="btn btn-primary btn-lg ms-1 flex-fill" id="submitButton" type="submit"
                                    style="background-color: rgb(233, 75, 75);">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                </div>
            </div> {{-- fim do card --}}
        </div> {{-- fim da coluna --}}
    </div> {{-- fim da row --}}
</div> {{-- fim da container --}}
@endsection