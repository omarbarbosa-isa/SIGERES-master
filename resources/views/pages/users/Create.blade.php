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
                          <label for="validationCustom01" class="form-label">Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            value="Omar"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
               </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Surname</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            value="Barbosa"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustomUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustomUsername"
                              aria-describedby="inputGroupPrepend"
                              required
                            />
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">birth_date</label>
                          <input
                            type="date"
                            class="form-control"
                            id="validationCustom03"
                            required
                          />
                          <div class="invalid-feedback">Please provide a valid birth date.</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">category</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            value="Category"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">role</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            value="Role"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">gender</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            value="Male"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">contact</label>
                          <input
                            type="number"
                            class="form-control"
                            id="validationCustom02"
                            value="+258 84 000 0000"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">Adress</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose&hellip;</option>
                            <option>Maputo</option>
                            <option>Matola</option>
                            <option>Beira</option>
                          </select>
                          <div class="invalid-feedback">Please select a valid state.</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom05" class="form-label">photo</label>
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
                            value="male@example.com"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="validationCustom02"
                            value="password123"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>

                        <div class="col-12">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="invalidCheck"
                              required
                            />
                            <label class="form-check-label" for="invalidCheck">
                              Aceito os termos e condições
                            </label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit">Criar User</button>
                    </div>
                  </form>
                </div>
              </div>
                </div>
        </div>
</main>
@endsection