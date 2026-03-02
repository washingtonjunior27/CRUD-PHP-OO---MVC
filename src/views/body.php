<div class="container my-5">
    <a href="/crud/register.php" type="button" class="btn btn-primary">
        Register
    </a>
</div>

<main class="px-4 text-center container flex-fill">
    <div class="table-responsive">
        <table class="table table-bordered border-black">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($user['id']); ?></th>
                        <td><?= htmlspecialchars($user['name']); ?></td>
                        <td><?= htmlspecialchars($user['username']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                        <form action="/crud/index.php" method="POST">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                            <input type="hidden" name="action" value="trackUser">
                            <td>
                                <button type="submit" class="btn">
                                    <i class="bi bi-pencil-square text-primary fs-4"></i>
                                </button>
                            </td>
                        </form>
                        <form action="/crud/index.php" method="POST">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                            <input type="hidden" name="action" value="delete">
                            <td>
                                <button type="submit" class="btn">
                                    <i class="bi bi-trash text-danger fs-4"></i>
                                </button>
                            </td>
                        </form>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>