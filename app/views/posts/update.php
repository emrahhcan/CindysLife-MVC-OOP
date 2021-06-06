<div class="container">
    <?php
        require APPROOT . '/views/includes/head.php';
        require APPROOT . '/views/includes/navigation.php';
    ?>
    <div class="update-container">
        <h1 class="font-property">Update post</h1>
        <div class="tags-divider">
            <div class="tags-divider-line"></div>
            <div class="tags-divider-icon"><i class="fas fa-star"></i></div>
            <div class="tags-divider-line"></div>
        </div>
        <form action="<?php echo URLROOT; ?>/posts/update/<?php echo $data['post']->id ?>" method="POST">
            <div>
                <input class="title" type="text" name="title" value="<?php echo $data['post']->title ?>" >
            </div>
            <div>
                <textarea class="content" name="body" placeholder="Content"><?php echo $data['post']->body ?></textarea>
            </div>
            <button class="submit-button" name="submit" type="submit">Submit</button>
            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
                <?php echo $data['bodyError']; ?>
            </span>
        </form>
    </div>
    <?php require APPROOT . '/views/includes/footer.php'; ?>
</div>