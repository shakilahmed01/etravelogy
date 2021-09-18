@if (Session::has('success'))

            <div class="alert alert-success text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('success') }}</p>

            </div>

  @endif

  @if (Session::has('error'))

              <div class="alert alert-danger text-center">

                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                  <p>{{ Session::get('error') }}</p>

              </div>

    @endif

  @if ($errors->any())
                    <div class="alert alert-danger">
                    @if($errors->count()==1)
                      {{ $errors->first() }}
                    @else
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                          @endif
                      </div>
                @endif
