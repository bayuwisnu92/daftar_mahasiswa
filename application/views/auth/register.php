<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h3 class="text-center">Register</h3>
            <form action="<?= base_url('auth/register_process'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <p class="text-center mt-3">
                <a href="<?= base_url('auth/login'); ?>">Login</a>
            </p>
        </div>
    </div>
</div>
