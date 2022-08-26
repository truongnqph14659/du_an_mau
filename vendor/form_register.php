<div class="container-fluid register_form">
    <p class="ms-lg-4 fw-bold">Xin Chào!</p>
    <ion-icon name="close-circle" class="close-circle"></ion-icon>
    <form action="sign_in_user" method="post" name="register">
        <div class="mb-1">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="mb-1">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="mb-1">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div>
            <input type="text" class="form-control" name="image" id="inputGroupFile02" value="http://localhost/du_an_mau/image/logo_user.png" hidden>
        </div>
        <button type="submit" class="btn form_submit btn-primary w-100" name="sign_up">Sign Up</button>
        <p class="recommend_account">Have already an account ? <span class="logn_in_form">Login here</span></p>
    </form>
</div>