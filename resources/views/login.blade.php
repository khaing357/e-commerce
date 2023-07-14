<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-md-4">
                <form action="login" method="POST">
                @csrf
                    <div class="form-group mb-3">
                        <label class="fw-bold mb-1" for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold mb-1" for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>