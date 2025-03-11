$(document).ready(function(){
    function loadProducts() {
        $("#productList").load("your_product.php");
    }

    loadProducts();

    // Handle product form submission using AJAX
    $("#productForm").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "upload_product.php",
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(response) {
                $("#message").text(response);
                loadProducts();
            }
        });
    });
});