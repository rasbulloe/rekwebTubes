<div class="container">
    <div class="row">
        <div class="col md-10">
        
            <h3 class="mt-3">List of Peoples</h3>

            <table class="table">
                <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($peoples as $peoples) : ?>
                <tr>
                <th><?= ++$start; ?></th>
                <th><?= $peoples['name']; ?></th>
                <th><?= $peoples['address']; ?></th>
                <th><?= $peoples['email']; ?></th>
                <th>
                    <a href="" class="badge badge-warning">Detail</a>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                </th>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>

        </div>
    </div>
</div>