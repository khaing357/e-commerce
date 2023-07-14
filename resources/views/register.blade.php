<x-layout>
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 offset-md-4">
                <form action="register" method="POST">
                @csrf
                    <div class="form-group mb-3">
                        <label class="fw-bold mb-1" for="exampleInputName">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="fw-bold mb-1" for="exampleInputUserName">User Name</label>
                        <input name="username" type="text" class="form-control" id="exampleInputUserName" placeholder="Enter UserName">
                    </div>

                    <div class="form-group mb-3">
                        <label class="fw-bold mb-1" for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group mb-3">
                        <label class="fw-bold mb-1" for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>