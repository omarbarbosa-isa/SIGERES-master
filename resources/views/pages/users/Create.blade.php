@extends('layouts.base')

@section('content')

 <main class="app-main">
        <div class="app-content-header">
                <div class="container-fluid">

                    <h1>Criar user pages</h1>

 <a type="button" href="{{ route('users.index')}}" class="btn btn-outline-warning mb-2">Voltar</a>

 <!-- Input Group -->
              <div class="col-md-6">
                <div class="card card-success card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Input Group</div>
                  </div>
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                    </div>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Recipient's username"
                        aria-label="Recipient's username"
                        aria-describedby="basic-addon2"
                      />
                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    <div class="mb-3">
                      <label for="basic-url" class="form-label">Your vanity URL</label>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon3"
                          >https://example.com/users/</span
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="basic-url"
                          aria-describedby="basic-addon3 basic-addon4"
                        />
                      </div>
                      <div class="form-text" id="basic-addon4">
                        Example help text goes outside the input group.
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input
                        type="text"
                        class="form-control"
                        aria-label="Amount (to the nearest dollar)"
                      />
                      <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                      />
                      <span class="input-group-text">@</span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Server"
                        aria-label="Server"
                      />
                    </div>
                    <div class="input-group">
                      <span class="input-group-text">With textarea</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>
              </div>
                </div>
        </div>
</main>
@endsection