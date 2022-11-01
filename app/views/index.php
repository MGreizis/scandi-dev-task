<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Document</title>
    <style>
        #header {
            border-bottom: 2px;
            border-bottom-style: solid;
            border-bottom-color: black;
        }
        #product-display {
            border: 1px;
            border-style: solid;
            border-color: black;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="columns" id="header">
            <div class="column is-four-fifths mt-6 has-text-black">
                <h1 class="title">Product List</h1>
            </div>
            <div class="column mt-6 has-text-black">
                <a href="addproduct/index"><button class="button is-link">Add</button></a>
            </div>
            <div class="column mt-6 has-text-black">
                <button class="button is-link" id="delete-product-btn">Mass Delete</button>
            </div>
        </div>

        <div class="columns has-text-centered has-text-black">
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Disc</p>
                <p>Price</p>
                <p>Size</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Disc</p>
                <p>Price</p>
                <p>Size</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Disc</p>
                <p>Price</p>
                <p>Size</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Disc</p>
                <p>Price</p>
                <p>Size</p>
            </div>
        </div>

        <div class="columns has-text-centered has-text-black">
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Book</p>
                <p>Price</p>
                <p>Weight</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Book</p>
                <p>Price</p>
                <p>Weight</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Book</p>
                <p>Price</p>
                <p>Weight</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Book</p>
                <p>Price</p>
                <p>Weight</p>
            </div>
        </div>

        <div class="columns has-text-centered has-text-black">
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Furniture</p>
                <p>Price</p>
                <p>Dimensions</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Furniture</p>
                <p>Price</p>
                <p>Dimensions</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Furniture</p>
                <p>Price</p>
                <p>Dimensions</p>
            </div>
            <div class="column m-2" id="product-display">
                <input type="checkbox" class="delete-checkbox"> <br>
                <p>SKU</p>
                <p>Furniture</p>
                <p>Price</p>
                <p>Dimensions</p>
            </div>
        </div>

    </div>
</body>
</html>