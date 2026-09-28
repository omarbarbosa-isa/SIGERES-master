@extends('layouts.base')

@section('content')

 <main class="app-main">
        <div class="app-content-header">
                <div class="container-fluid">

                    <h1>Criar user pages</h1>

 <a type="button" href="{{ route('users.index')}}" class="btn btn-outline-warning mb-2">Voltar</a>

 <!-- Custom validation (criacao de users) -->
              <div class="col-lg-6">
                <div class="card card-info card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Prencha os campos cuidadosamente</div>
              </div>
                  <form class="needs-validation" novalidate>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Nome</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Omar"
                            id="validationCustom01"
                        
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
               </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Sobrenome</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Barbosa"
                            id="validationCustom02"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustomUsername" class="form-label">Nome de usuário</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Obarbosa"
                              id="validationCustomUsername"
                              aria-describedby="inputGroupPrepend"
                              required
                            />
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">Data de nascimento</label>
                          <input
                            type="date"
                            class="form-control"
                            id="validationCustom03"
                            required
                          />
                          <div class="invalid-feedback">Please provide a valid birth date.</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Categoria</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            placeholder="Administrador"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Função</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            placeholder="Cozinheiro"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Gênero</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Escolher&hellip;</option>
                            <option>Feminino</option>
                            <option>Masculino</option>
                          </select>

                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Contacto</label>
                          <input
                            type="number"
                            class="form-control"
                            id="validationCustom02"
                            placeholder="+258 84 000 0000"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">Morada</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Escolher&hellip;</option>
                            <option>Maputo</option>
                            <option>Maputo-Provincia</option>
                            <option>Gaza</option>
                            <option>Inhambane</option>
                            <option>Sofala</option>
                            <option>Manica</option>
                            <option>Tete</option>
                            <option>Zambezia</option>
                            <option>Nampula</option>
                            <option>Niassa</option>
                            <option>Cabo Delgado</option>
                          </select>
                          <div class="invalid-feedback">Please select a valid state.</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom05" class="form-label">Foto</label>
                          <input
                            type="file"
                            class="form-control"
                            id="validationCustom05"
                            required
                          />
                          <div class="invalid-feedback">Please provide a valid file.</div>
                        </div>

                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">email</label>
                          <input
                            type="email"
                            class="form-control"
                            id="validationCustom01"
                            placeholder="Omar@example.com"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">palavra-passe</label>
                          <input
                            type="password"
                            class="form-control"
                            id="validationCustom02"
                            placeholder="password123"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit">Criar Utilizador</button>
                    </div>
                  </form>
                </div>
              </div>
                </div>
        </div>
</main>
@endsection