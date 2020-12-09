
$(document).ready(function(){

    $('#userNav').html(`
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">

                <a class="navbar-brand">DAVID HUCK PRODUCTS</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="addProduct.php">Add New Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="updateProduct.php">Update Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="deleteProduct.php">Delete Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="viewProduct.php">View Products</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    
    `);

});