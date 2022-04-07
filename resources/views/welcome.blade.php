<x-layout>
    <div class="container-fluid">
        <div class="d-flex flex-column align-items-center justify-content-center vh-100">
            <div class="d-flex">
                <h1 class="display-5">
                    Nothing to see here, move along. Bye!!!
                </h1>
            </div>
            <div class="d-flex">
                <a class="btn btn-lg btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    Log In
                </a>
            </div>
        </div>

    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Login Form</h5>
            {{-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button> --}}
        </div>
        <div class="offcanvas-body">
            <form method="post" action="/login">
                @csrf

                <div class="form-floating mb-3">
                    <input type="email" class="form-control form-control-sm" name="email" placeholder="name@example.com">
                    <label for="email">Email</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <div class="gap-3 d-flex mt-3">
                    <input type="submit" name="login" class="btn btn-lg btn-primary flex-fill" value="Log In"></input>

                    <button type="button" class="btn btn-lg btn-secondary flex-fill" data-bs-dismiss="offcanvas">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
