<?php require'./views/partials/head.php' ?>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an account!</h1>
                            </div>
                            <form class="user" action="." method="POST">
                                <input type="hidden" name="action" value="signup"/>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user"
                                            name="first-name" 
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user" 
                                            name="last-name"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user" 
                                            name="username"
                                            placeholder="Username">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="" class="form-control form-control-user d-flex align-items-center justify-content-center">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input 
                                        type="email" 
                                        class="form-control form-control-user" 
                                        name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                            type="password" 
                                            class="form-control form-control-user"
                                            name="password" 
                                            placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                            type="password" 
                                            class="form-control form-control-user"
                                            name="confirm-password" 
                                            placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p class="small">Already have an account? <a href=".?action=login">Login!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require'./views/partials/footer.php' ?>