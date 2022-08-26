<div class="col-10">
    <form action="post_comment" class="d-flex flex-column" method="POST">
        <div class="bg-light p-2">
            <div class="d-flex flex-row align-items-start">
                <img class="rounded-circle" src="<?= $_SESSION['user_account']['user_image'] ?>" width="50" height="50">
                <input type="text" class="form-control p-3 comment_input" name="noi_dung_bl" id="formGroupExampleInput2" placeholder="comment..........">
            </div>
            <div>
                <input type="text" class="form-control p-3 comment_input" name="ma_san_pham" value="<?= $data_sp[0]['ma_san_pham'] ?>" id="formGroupExampleInput2" hidden>
            </div>
            <div>
                <input type="text" class="form-control p-3 comment_input" name="user_id" value="<?= $_SESSION['user_account']['user_id'] ?>" id="formGroupExampleInput2" hidden>
            </div>
            <div class="mt-2 px-4 text-right">
                <button class="btn btn-primary btn-sm shadow-none" name="submit_comment" type="submit">Post comment</button>
            </div>
        </div>
    </form>
</div>