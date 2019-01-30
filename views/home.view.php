<?php require 'partials/header.view.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ol>
                <?php
                foreach ($tasks as $task) {
                    ?>
                    <li><?= $task->name ?></li>

                <?php }
                ?>
            </ol>
        </div>
    </div>
</div>

<?php require 'partials/footer.view.php'; ?>

