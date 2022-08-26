<div class="container-fluid login_form">
    <p class="ms-lg-4 fw-bold">Xin Chào!</p>
    <ion-icon name="close-circle" class="close-circle"></ion-icon>
    <form action="logn_in_form" method="post" name="login">
        <div class="mb-1">
            <label for="email" class="form-label mb-0">Email</label>
            <input type="email" class="form-control" id="email" name="email" id="exampleInputEmail1">
        </div>

        <div class="mb-1">
            <label for="password" class="form-label mb-0">Password</label>
            <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
        </div>
        <?php if (isset($_GET['id_sp'])) : ?>
            <div>
                <input type="text" name="id_sp" class="form-control" id="exampleInputPassword1" value="<?= $_GET['id_sp'] ?>" hidden>
            </div>
        <?php endif; ?>
        <button type="submit" class="btn form_submit btn-primary w-100" name="login">Submit</button>
        <a class="m-y-2" href="forgot_pass">
            <p class="fw-lighter fs-6 m-2">Forget password</p>
        </a>
    </form>
</div>