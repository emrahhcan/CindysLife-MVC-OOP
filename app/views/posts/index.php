<div class="container-self">
    <?php
        require APPROOT . '/views/includes/head.php';
        require APPROOT . '/views/includes/navigation.php';
    ?>
        <header class="blog-img py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to My Blog</h1>
                    <p class="lead mb-0">Let's Get Started</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <?php if(isLoggedIn() && $_SESSION['is_admin'] == true): ?>
                <a class="create" href="<?php echo URLROOT; ?>/posts/create">
                    <div>Create a New Post</div>
                </a>
            <?php else: ?>
                
            <?php endif; ?>
            <div class="row">
                <!-- Blog entries-->
                <?php foreach($data['posts'] as $post): ?>
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?php echo 'Created at ' . date('F j Y', strtotime($post->created_at)) . ' by ' . ucwords($post->username); ?></div>
                            <h2 class="card-title"><?php echo $post->title; ?></h2>
                            <p class="card-text">
                            <?php 
                                if(strlen($post->body) > 150) {
                                    $stringCut = substr($post->body, 0, 350);
                                    $endPoint = strrpos($stringCut, ' ');
                                    $post->body = $endPoint ? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                                    $post->body .= '<a class="btn btn-primary" href="'.URLROOT.'/posts/fulltext?ID='.$post->id.'"><p>You like it? See the rest</p></a>';
                                }
                                echo $post->body;
                            ?>
                            </p>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                </div>
                <?php endforeach; ?>
            </div>
        </div>



    <?php require APPROOT . '/views/includes/footer.php'; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>