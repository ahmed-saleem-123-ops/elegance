
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{--<script>--}}
{{--            @if(isset($items) && count($items) > 0)--}}
{{--    const testimonials = [--}}
{{--                    @foreach($items as $item)--}}
{{--            {--}}
{{--                text: "{{ $item->heading }}",--}}
{{--                author: "- {{ $item->paragraph }}"--}}
{{--            } @if (!$loop->last),@endif--}}
{{--                @endforeach--}}
{{--        ];--}}
{{--            @else--}}
{{--    const testimonials = [];--}}
{{--            @endif--}}


{{--    let currentIndex = 0;--}}

{{--    function showTestimonial(index) {--}}
{{--        const testimonialText = document.getElementById('testimonial-text');--}}
{{--        const testimonialAuthor = document.getElementById('testimonial-author');--}}
{{--        testimonialText.textContent = testimonials[index].text;--}}
{{--        testimonialAuthor.textContent = testimonials[index].author;--}}
{{--    }--}}

{{--    function nextTestimonial() {--}}
{{--        currentIndex = (currentIndex + 1) % testimonials.length;--}}
{{--        showTestimonial(currentIndex);--}}
{{--    }--}}

{{--    // Initial display--}}
{{--    showTestimonial(currentIndex);--}}

{{--    // Change testimonial every 5 seconds--}}
{{--    setInterval(nextTestimonial, 5000);--}}
{{--</script>--}}


{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function () {--}}
{{--        var swiper = new Swiper('.swiper-container', {--}}
{{--            slidesPerView: 1,--}}
{{--            spaceBetween: 0,--}}
{{--            loop: true,--}}
{{--            pagination: {--}}
{{--                el: '.swiper-pagination',--}}
{{--                clickable: true,--}}
{{--            },--}}
{{--            navigation: {--}}
{{--                nextEl: '.swiper-button-next',--}}
{{--                prevEl: '.swiper-button-prev',--}}
{{--            },--}}
{{--            breakpoints: {--}}
{{--                640: {--}}
{{--                    slidesPerView: 2,--}}
{{--                },--}}
{{--                768: {--}}
{{--                    slidesPerView: 2,--}}
{{--                },--}}
{{--                1024: {--}}
{{--                    slidesPerView: 7--}}
{{--                    ,--}}
{{--                },--}}
{{--            },--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}





<script>
    document.querySelectorAll('.decrement').forEach(function(button) {
        button.addEventListener('click', function() {
            const quantityInput = this.nextElementSibling;
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                updateQuantity(this.dataset.id, quantityInput.value);
            }
        });
    });

    document.querySelectorAll('.increment').forEach(function(button) {
        button.addEventListener('click', function() {
            const quantityInput = this.previousElementSibling;
            let currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
            updateQuantity(this.dataset.id, quantityInput.value);
        });
    });


    document.querySelectorAll('.quantity-input').forEach(function(input) {
        input.addEventListener('change', function() {
            const quantity = parseInt(this.value);
            if (quantity > 0) {
                updateQuantity(this.dataset.id, quantity);
            }
        });
    });

</script>



<script>
    // Toggle visibility on icon click
    document.getElementById('search-icon').addEventListener('click', function () {
        const searchField = document.getElementById('search-field');

        // Toggle Tailwind 'hidden' class
        searchField.classList.toggle('hidden');
    });

    // Check if there's a search value in the URL
    const params = new URLSearchParams(window.location.search);
    if (params.get('search')) {
        const searchField = document.getElementById('search-field');

        // Remove 'hidden' class if search value exists
        searchField.classList.remove('hidden');
    }

</script>






<script>
    $(document).ready(function() {
                {{--const isLoggedIn = {{ Auth::check() ? 'true' : 'false' }};--}}
        let isProcessing = false;

        $('.add-to-cart-btn, #add-to-cart').on('click', function(event) {
            event.preventDefault();
            if (isProcessing) return;
            isProcessing = true;

            let productId = $(this).data('id');
            let quantity = 1;


            if ($('#quantity').length > 0) {
                quantity = $('#quantity').val();
            } else {


                quantity = $(this).closest('.product-item').find('.quantity').val();
            }

            // console.log('User logged in:', isLoggedIn);
            //
            // if (!isLoggedIn) {
            //     console.log('Showing login popup');
            //     showLoginPopup();
            //     isProcessing = false;
            // } else {
            //     console.log('Proceeding with adding to cart');
            $.ajax({
                url: "{{ route('cart.add') }}",
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
                }),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    alert(data.message);
                },
                error: function(xhr, status, error) {
                    console.log('Error:', error);
                    if (xhr.status === 401) {
                        alert('Unauthorized: Please log in to proceed.');
                    } else {
                        alert('Error occurred: ' + error);
                    }
                },
                complete: function() {
                    isProcessing = false;
                }
            });
        });
    });

    //     function showLoginPopup() {
    //         $('#login-popup').css('display', 'block');
    //     }
    //
    //     // Close login popup function
    //     window.closePopup = function() {
    //         $('#login-popup').css('display', 'none');
    //     };
    // });
</script>


<script>
    $(document).ready(function() {

        $('.share-btn').on('click', function() {
            // Show the modal
            $('#share-modal').removeClass('hidden');

            // Generate share link
            var productUrl = window.location.href;
            $('#share-link').val(productUrl);
        });

        // Close the modal
        $('#close-modal').on('click', function() {
            $('#share-modal').addClass('hidden');
        });

        // Share functionality for Facebook, Twitter, and WhatsApp
        $('#facebook-share').on('click', function() {
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent($('#share-link').val()), '_blank');
        });

        $('#twitter-share').on('click', function() {
            window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent($('#share-link').val()), '_blank');
        });

        $('#whatsapp-share').on('click', function() {
            window.open('https://wa.me/?text=' + encodeURIComponent($('#share-link').val()), '_blank');
        });
    });
</script>


<script>
    document.querySelectorAll('.category-checkbox').forEach(radio => {
        radio.addEventListener('change', function() {
            const selectedCategory = this.value.trim().toLowerCase();
            const products = document.querySelectorAll('.product-item');

            products.forEach(product => {
                const productCategory = product.querySelector('h1').innerText.trim().toLowerCase();
                if (productCategory === selectedCategory) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    AOS.init();
</script>


<script src="https://cdn.tailwindcss.com"></script>

</body>
</html>

