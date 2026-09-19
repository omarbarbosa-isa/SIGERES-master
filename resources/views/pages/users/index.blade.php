 @extends('layouts.base')   

 @section('content')

 <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Users</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">user</a></li>
                    <li class="breadcrumb-item active" aria-current="page">index</li>
                  </ol>
                </nav>
              </div>
            </div>
            <a type="button" href="{{ route('users.create')}}" class="btn btn-outline-success mb-2">Criar user</a>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 16rem">
                    <span class="input-group-text">
                      <i class="bi bi-search" aria-hidden="true"></i>
                    </span>
                    <input
                      id="table-filter"
                      type="search"
                      class="form-control"
                      placeholder="Filter rows&hellip;"
                      aria-label="Filter rows"
                    />
                  </div>
                </div>
              </div>

              <!--<div class="card-body"> -->
                
                <div id="users-table"></div>

                 <table class="table table-sm">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Tarefas</th>
                          <th>Estado</th>
                          <th style="width: 40px">Progresso</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1.</td>
                          <td>Registar novo utilizador</td>
                          <td>
                            <div class="progress progress-xs">
                              <div
                                class="progress-bar progress-bar-danger"
                                style="width: 76%"
                              ></div>
                            </div>
                          </td>
                          <td><span class="badge text-bg-danger">76%</span></td>
                        </tr>
                        <tr class="align-middle">
                          <td>2.</td>
                          <td>Editar dados do utilizador</td>
                          <td>
                            <div class="progress progress-xs">
                              <div
                                class="progress-bar progress-bar-danger"
                                style="width: 66%"
                              ></div>
                            </div>
                          </td>
                          <td><span class="badge text-bg-danger">66%</span></td>
                        </tr>
                        <tr class="align-middle">
                          <td>3.</td>
                          <td>Definir níveis de acesso</td>
                          <td>
                            <div class="progress progress-xs">
                              <div
                                class="progress-bar progress-bar-danger"
                                style="width: 35%"
                              ></div>
                            </div>
                          </td>
                          <td><span class="badge text-bg-danger">35%</span></td>
                        </tr>
                        <tr class="align-middle">
                          <td>4.</td>
                          <td>Activar ou desactivar utilizadores</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar text-bg-warning" style="width: 100%"></div>
                            </div>
                          </td>
                          <td>
                            <span class="badge text-bg-warning">100%</span>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>5.</td>
                          <td>Consultar lista de utilizadores</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar text-bg-primary" style="width: 90%"></div>
                            </div>
                          </td>
                          <td>
                            <span class="badge text-bg-primary">90%</span>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>6.</td>
                          <td>Actualizar permissões</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar text-bg-success" style="width: 100%"></div>
                            </div>
                          </td>
                          <td>
                            <span class="badge text-bg-success">100%</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              <div class="card-footer text-secondary small">
                Powered by
                <a href="https://tabulator.info/" target="_blank" rel="noopener">Omar Barbosa</a>
                &mdash; Sistema de Gestão de Restaurantes.
              </div>
            </div>
          </div>
        </div>
      </main>
      

 @endsection