<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Add Product</title>
    <style>
    #header {
        border-bottom: 2px;
        border-bottom-style: solid;
        border-bottom-color: black;
    }
    .footer {
        border-top: 2px;
        border-top-style: solid;
        border-top-color: black;
    }
    #section {
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
                <h1 class="title">Add Product</h1>
            </div>
            <div class="column mt-6 has-text-black">
                <button class="button is-link">Save</button>
            </div>
            <div class="column mt-6 has-text-black">
                <a href="/"><button class="button is-link" id="delete-product-btn">Cancel</button></a>
            </div>
        </div>

        <div id="product_field">
            <nav class="level">
                <div class="level-left">
                    <div class="level-item">
                        <p class="subtitle is-5">
                            SKU
                        </p>
                    </div>
                    <div class="level-item">
                        <div class="field has-addons">
                            <p class="control">
                                <input class="input is-black" type="text" placeholder="SKU" id="sku">
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="level">
                <div class="level-left">
                    <div class="level-item">
                        <p class="subtitle is-5">
                            Name
                        </p>
                    </div>
                    <div class="level-item">
                        <div class="field has-addons">
                            <p class="control">
                                <input class="input is-black" type="text" placeholder="Name" id="name">
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="level">
                <div class="level-left">
                    <div class="level-item">
                        <p class="subtitle is-5">
                            Price ($)
                        </p>
                    </div>
                    <div class="level-item">
                        <div class="field has-addons">
                            <p class="control">
                                <input class="input is-black" type="text" placeholder="Price" id="price">
                            </p>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="field">
                <label class="label">Type Switcher</label>
                <div class="control">
                    <div class="select is-black">
                        <select id="productType">
                            <option id="dvd">DVD</option>
                            <option id="book">Book</option>
                            <option id="furniture">Furniture</option>
                        </select>
                    </div>
                </div>
            </div>

            <section class="section is-small" id="section">
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-5">
                                Size (MB)
                            </p>
                        </div>
                        <div class="level-item">
                            <div class="field has-addons">
                                <p class="control">
                                    <input class="input is-black" type="text" placeholder="Size" id="size">
                                </p>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-5">
                                Height (CM)
                            </p>
                        </div>
                        <div class="level-item">
                            <div class="field has-addons">
                                <p class="control">
                                    <input class="input is-black" type="text" placeholder="Height" id="height">
                                </p>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-5">
                                Width (CM)
                            </p>
                        </div>
                        <div class="level-item">
                            <div class="field has-addons">
                                <p class="control">
                                    <input class="input is-black" type="text" placeholder="Width" id="width">
                                </p>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-5">
                                Length (CM)
                            </p>
                        </div>
                        <div class="level-item">
                            <div class="field has-addons">
                                <p class="control">
                                    <input class="input is-black" type="text" placeholder="Length" id="length">
                                </p>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-5">
                                Weight (Kg)
                            </p>
                        </div>
                        <div class="level-item">
                            <div class="field has-addons">
                                <p class="control">
                                    <input class="input is-black" type="text" placeholder="Weight" id="weight">
                                </p>
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
        </div>

        <footer class="footer has-text-centered mt-6">
            Scandiweb Test Assignment
        </footer>
    </div>
</body>
</html>