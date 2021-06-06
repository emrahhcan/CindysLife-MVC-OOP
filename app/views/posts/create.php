<div class="container">
    <?php
        require APPROOT . '/views/includes/head.php';
        require APPROOT . '/views/includes/navigation.php';
    ?>
    <div class="create-content">
        <div class="font-property">Create new post</div>
        <div class="tags-divider">
            <div class="tags-divider-line"></div>
            <div class="tags-divider-icon"><i class="fas fa-star"></i></div>
            <div class="tags-divider-line"></div>
        </div>
        <form action="<?php echo URLROOT; ?>/posts/create" method="POST" enctype="multipart/form-data">
            <div>
                <input type="text" name="title" placeholder="Title" class="title">
            </div>
            <div>
                <textarea name="body" placeholder="Content" class="content"></textarea>
            </div>
            <div>
                <input type="file" name="image" id="fileToUpload">
            </div>
            <div>
                <button class="submit-button" name="submit" type="submit">Share</button>
            </div>
            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
                <?php echo $data['bodyError']; ?>
            </span>
        </form>
    </div>
    <?php require APPROOT . '/views/includes/footer.php'; ?>
</div>