<form class="container px-4 py-5 my-5 container flex-fill" method="POST" action="/crud/index.php">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Login</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= htmlspecialchars($user['email']) ?>" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>