<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?__('Product Details')?> | <?__('Cake Shop')?></title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link"><?__('Cake Shop')?></a>
            </div>
            <div class="nav-links">
<<<<<<< HEAD
            <a href="/User/login"><?__('Login')?></a>
                <a href="/User/logout"><?__('Logout')?></a>
                <a href="/Cart/index"><?__('View Cart')?></a>
                <a href="/Cake/catalog"><?__('View Catalog')?></a>
                <a href="/Profile/index"><?__('View Profile')?></a>
=======
                <a href="/User/login">Login</a>
                <a href="/User/logout">Logout</a>
                <a href="/Cart/index">View Cart</a>
                <a href="/Cake/catalog">View Catalog</a>
                <a href="/Profile/index">View Profile</a>
                <a href="/Cake/details/<?= $product->product_id ?>?lang=en">EN</a>
                <a href="/Cake/details/<?= $product->product_id ?>?lang=fr">FR</a>
>>>>>>> f215a5fd0bc5b324a3e0805c753a3960ed896f5a
            </div>
        </div>
    </div>
    <div class="container product-details">
        <h2><?= htmlspecialchars($data['product']->name) ?></h2>
        <div class="product-image">
            <img src="<?= htmlspecialchars($data['product']->image_path) ?>" enctype="multipart/form-data">
        </div>
        <div class="product-info">
            <p class="description"><?= htmlspecialchars($data['product']->details) ?></p>
            <p class="description"><?= htmlspecialchars($data['product']->type) ?></p>
            <p class="price"><?= htmlspecialchars($data['product']->price) ?></p>
            <p class="description"><?= htmlspecialchars($data['product']->quantity) ?></p>
            <a href="/Cart/add/<?= $data['product']->product_id ?>" class="add-to-cart-btn"><?__('Add to Cart')?></a>
        </div>
        <div class="reviews">
            <h3>Reviews</h3>
            <?php if (isset($data['product']->reviews) && count($data['product']->reviews) > 0) { ?>
                <?php foreach ($data['product']->reviews as $review) { ?>
                    <div class="review">
                        <strong>User: <?= htmlspecialchars($review['username']) ?></strong>
                        <div class="rating">
                            <?= str_repeat("★", $review['rating']) . str_repeat("☆", 5 - $review['rating']) ?>
                        </div>
                        <p><?= htmlspecialchars($review['comment']) ?></p>
                        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $review['user_id']) { ?>
                            <button class="edit-review-btn" data-review-id="<?= $review['review_id'] ?>" data-rating="<?= $review['rating'] ?>" data-comment="<?= htmlspecialchars($review['comment']) ?>">Edit</button>
                            <button class="delete-review-btn" data-review-id="<?= $review['review_id'] ?>"><?__('Delete')?></button>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p><?__('No reviews yet. Be the first to review!')?></p>
            <?php } ?>
            <button class="add-review-btn" data-product-id="<?= $data['product']->product_id ?>"><?__('Write a Review')?></button>
        </div>
    </div>

    <!-- Review Modals -->
    <div id="reviewModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle"><?__('Write a Review')?></h2>
            <form id="reviewForm">
                <input type="hidden" id="review_id" name="review_id">
                <input type="hidden" id="product_id" name="product_id" value="<?= $data['product']->product_id ?>">
                <label for="rating"><?__('Rating:')?></label>
                <select name="rating" id="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="comment"><?__('Comment:')?></label>
                <textarea name="comment" id="comment" required></textarea>
                <button type="submit"><?__('Submit')?></button>
            </form>
        </div>
    </div>

    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2><?__('Delete Review')?></h2>
            <p><?__('Are you sure you want to delete this review?')?></p>
            <form id="deleteForm">
                <input type="hidden" id="delete_review_id" name="review_id">
                <button type="submit"><?__('Yes, Delete')?></button>
                <button type="button" class="cancel-btn"><?__('Cancel')?></button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Modal functionality
            var reviewModal = $('#reviewModal');
            var deleteModal = $('#deleteModal');
            var span = $('.close');
            var cancelBtn = $('.cancel-btn');

            span.on('click', function () {
                reviewModal.hide();
                deleteModal.hide();
            });

            cancelBtn.on('click', function () {
                deleteModal.hide();
            });

            $(window).on('click', function (event) {
                if (event.target == reviewModal[0] || event.target == deleteModal[0]) {
                    reviewModal.hide();
                    deleteModal.hide();
                }
            });

            // Open Add Review Modal
            $('.add-review-btn').on('click', function () {
                $('#modalTitle').text('Write a Review');
                $('#review_id').val('');
                $('#rating').val('');
                $('#comment').val('');
                reviewModal.show();
            });

            // Open Edit Review Modal
            $('.edit-review-btn').on('click', function () {
                $('#modalTitle').text('Edit Review');
                $('#review_id').val($(this).data('review-id'));
                $('#rating').val($(this).data('rating'));
                $('#comment').val($(this).data('comment'));
                reviewModal.show();
            });

            // Open Delete Review Modal
            $('.delete-review-btn').on('click', function () {
                $('#delete_review_id').val($(this).data('review-id'));
                deleteModal.show();
            });

            // Handle Review Form Submission
            $('#reviewForm').on('submit', function (event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '/Review/save',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        location.reload();
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });

            // Handle Delete Form Submission
            $('#deleteForm').on('submit', function (event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '/Review/delete',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        location.reload();
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
