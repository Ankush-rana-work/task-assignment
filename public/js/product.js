$(document).ready(function () {
    let debounceTimeout;
    let page = 1;
    let perPage = 9;

    // Function to fetch products with pagination
    function fetchProducts(page = 1, product_name = '') {
        $('#loading').show();
        $.ajax({
            url: product_url,
            method: 'GET',
            data: {
                per_page: perPage,  // Adjust per page if necessary
                page: page,
                name: product_name,
            },
            success: function (data) {
                // Hide loading indicator
                $('#loading').hide();

                if (page === 1) {
                    $('#product-list').empty();  // Clear existing products
                }

                // Check if there are products to append
                if (data.data.length > 0) {
                    data.data.forEach(function (product) {
                        // Construct the product card HTML dynamically
                        var productCard = `
                                <div class="col-md-4 mb-4">
                                    <div class="product-card">
                                        <img src="${product.image || 'https://via.placeholder.com/300'}" alt="${product.name}">
                                        <div class="product-info d-flex justify-content-between">
                                            <div class="product_title_rating">
                                                <h5>${product.name}</h5>
                                                <div class="rating">
                                                    ${generateStars(product.rating)}  <!-- This is a function to generate the star rating -->
                                                </div>
                                            </div>
                                            <p class="price">$${product.price}</p>
                                        </div>
                                        <a href="${base_url+'/product/'+product.id}"class="buy-btn">Buy Now</a>
                                        <a href="#" class="cart-wrapper"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            `;

                        // Append the product card to the product list
                        $('#product-list').append(productCard);
                    });
                }else if (page==1) {
                    // If no products are found, show a message
                    $('#product-list').html('<p>No products found</p>');
                }
            },
            error: function (error) {
                $('#loading').hide();
                console.error('Error fetching products:', error);
            }
        });
    }


    $('.content').on('scroll', debounce(function () {
        console.log($(this).scrollTop() + $(this).innerHeight(),this.scrollHeight);
        // Check if the user scrolled to the bottom of the container
        if ($(this).scrollTop() + $(this).innerHeight() >= (this.scrollHeight-100)) {
            console.log('Near bottom, loading more products...');
            page++;  // Increment the page number for pagination
            product_name = $('#search-input').val();  // Get the current search query
            fetchProducts(page, product_name);  // Fetch products with new page and search query
        }
    }, 300));


    function debounce(func, delay) {
        let timer;
        return function (...args) {
            clearTimeout(timer);
            timer = setTimeout(() => func.apply(this, args), delay);
        };
    }

    function generateStars(rating) {
        var stars = '';
        for (var i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<i class="fa fa-star"></i>';
            } else if (i - rating < 1) {
                stars += '<i class="fa fa-star-half-alt"></i>';
            } else {
                stars += '<i class="fa fa-star-o"></i>';
            }
        }
        return stars;
    }

    // Initial fetch of products on page load
    fetchProducts();

    $('#search-input').on('input', function () {
        // Clear the previous timeout to reset the debounce delay
        clearTimeout(debounceTimeout);
    
        // Set a new timeout to wait for the user to stop typing
        debounceTimeout = setTimeout(() => {
            // Update search query and reset page
            const product_name = $(this).val();
            const page = 1;  // Reset page to 1 for new search
            fetchProducts(page, product_name);
        }, 500); // Adjust the delay as needed (500ms in this case)
    });
});