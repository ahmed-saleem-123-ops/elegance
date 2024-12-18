
<script>
    // Example of a chart using ApexCharts
    var options = {
        series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: 'Product Trends by Month',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();


</script>

<script>
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('aside');

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>

<script>
    var i = 0;
    $('#add').click(function () {
        ++i;
        $('#table tbody').append(`
        <tr>
            <td><input type="text" name="title[` + i + `][title]" placeholder="Enter your Title" class="form-control title-field"/></td>
            <td><input type="text" name="price[` + i + `][price]" placeholder="Enter your Price" class="form-control price-field"/></td>
            <td><input type="file" name="img[` + i + `][img]" class="form-control img-field"/></td>
            <td>
                <select class="form-control" name="brand_id[` + i + `][brand_id]">
                    @foreach($brands as $brand)
        <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                    @endforeach
        </select>
    </td>
    <td>
        <select class="form-control" name="category_id[` + i + `][category_id]">
                    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
        </select>
    </td>
    <td><button type="button" class="btn btn-danger remove">Remove</button></td>
</tr>
`);
    });

    // Remove Row functionality
    $(document).on('click', '.remove', function () {
        $(this).closest('tr').remove();
    });

    // Form submission validation
    $('form').on('submit', function(e) {
        var isValid = true;

        // Validate Title fields
        $('.title-field').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).addClass('is-invalid');
                $(this).after('<span class="text-danger">Title field is required</span>');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('span.text-danger').remove();
            }
        });

        // Validate Price fields
        $('.price-field').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).addClass('is-invalid');
                $(this).after('<span class="text-danger">Price field is required</span>');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('span.text-danger').remove();
            }
        });

        // Validate Image fields
        $('.img-field').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).addClass('is-invalid');
                $(this).after('<span class="text-danger">Image field is required</span>');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('span.text-danger').remove();
            }
        });

        // Validate Brand fields
        $('.brand-select').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).addClass('is-invalid');
                $(this).after('<span class="text-danger">Brand selection is required</span>');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('span.text-danger').remove();
            }
        });

        // Validate Category fields
        $('.category-select').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).addClass('is-invalid');
                $(this).after('<span class="text-danger">Category selection is required</span>');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('span.text-danger').remove();
            }
        });

        if (!isValid) {
            e.preventDefault(); // Stop form submission if any field is invalid
        }
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



</body>
</html>