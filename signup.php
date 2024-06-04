<?php
require_once "./header.php"
?>
<div class="container-fluid d-flex flex-column align-items-center justify-content-center p-5 min-vh-100 bg-black text-light">

    <h1 class="display-1 fw-bolder text-bg-warning">BookMyShow</h1>
    <h1>Sign Up</h1>
    <form action="" class="col-12 col-md-5">
        <div class="form-group my-2">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for="" class="form-label">Email</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for="" class="form-label">Password</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for="" class="form-label">Confirm Password</label>
            <input type="text" class="form-control">
        </div>

        <button class="btn btn-warning my-2 w-100 rounded-0 btn-outline-info border-0 text-black">Sign Up</button>

        <p>Already have an account? <a href="./login.php" class="link">Login</a></p>
    </form>

</div>