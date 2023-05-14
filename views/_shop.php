<!-- Shop -->
<main class="shop-container">
  <!-- Shop Filter -->
  <section class="filter">
  <form id="filter-form" method="GET" action="shop.php">
  <div class="header-filter" id="filter-btn">
      <i class="fa-solid fa-filter"></i>
      <h4 class="header-filter-name">Filters</h4>
    </div>

    </div>
    <div class="bottom-filter" id="filters">
    <label for="category_id"><h1>Categories</h1></label>

    <select name="category_id">
      <?php
      $categories = getCategories();
      while($category = mysqli_fetch_assoc($categories)) {
      ?>
      <option value="<?php echo $category['id']; ?>">
        <?php echo htmlspecialchars($category['name']); ?>
      </option>
      <?php
      }
      ?>
    </select>
      <div class="filter">
        <button type="button" id="price-btn">
          <h3>Price</h3>
          <i class="fa-solid fa-angle-down" id="price-toggle"></i>
        </button>

        <div class="price-filter">
          <input type="number" name="min_price" placeholder="Min" class="price-input">
          <span>-</span>
          <input type="number" name="max_price" placeholder="Max" class="price-input">
        </div>
      </div>

      <div class="filter">
        <button id="color-btn">
          <h3>Colors</h3>
          <i class="fa-solid fa-angle-down" id="color-toggle"></i>
        </button>
        <div class="colors color-filter">
          <div class="group">
            <input type="checkbox" name="colors[]" value="red" id="color-red">
            <label for="color-red">Red</label>
          </div>
          <div class="group">
            <input type="checkbox" name="colors[]" value="blue" id="color-blue">
            <label for="color-blue">Blue</label>
          </div>
          <div class="group">
          <input type="checkbox" name="colors[]" value="yellow" id="color-yellow">
          <label for="color-yellow">Yellow</label>
          </div>
          <div class="group">
          <input type="checkbox" name="colors[]" value="green" id="color-green">
          <label for="color-green">Green</label>
          </div>
          <div class="group">
          <input type="checkbox" name="colors[]" value="white" id="color-white">
          <label for="color-white">White</label>
          </div>
        </div>
      </div>
      <div class="filter">
        <button type="button" id="size-btn">
          <h3>Size</h3>
          <i class="fa-solid fa-angle-down" id="size-toggle"></i>
        </button>

        <div class="sizes size-filter">
          <div class="group">
            <input type="checkbox" name="sizes[]" value="XXS" id="size-xxs">
            <label for="size-xxs">XXS</label>
          </div>
          <div class="group">
            <input type="checkbox" name="sizes[]" value="XS" id="size-xs">
            <label for="size-xs">XS</label>
          </div>
          <div class="group">
            <input type="checkbox" name="sizes[]" value="S" id="size-s">
            <label for="size-s">S</label>
          </div>
          <div class="group">
            <input type="checkbox" name="sizes[]" value="M" id="size-m">
            <label for="size-m">M</label>
          </div>
          <div class="group">
            <input type="checkbox" name="sizes[]" value="L" id="size-l">
            <label for="size-l">L</label>
          </div>
          <div class="group">
            <input type="checkbox" name="sizes[]" value="XL" id="size-xl">
            <label for="size-xl">XL</label>
          </div>
          <div class="group">
            <input type="checkbox" name="sizes[]" value="XXL" id="size-xxl">
            <label for="size-xxl">XXL</label>
          </div>
        </div>
      </div>
      <button type="submit">Apply Filters</button>

    </div>
    </form>
  </section>
  <!-- Shop Products -->
  <section class="products">
    <div class="header-details">
      <h2 class="title">Product Name Placeholder</h2>

    </div>
    <!-- Product Grid -->

    <div class="product-grid grid-main">
    <?php
// Get the search term from the form
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Get the sorting parameter from the form
$sorting = isset($_GET['sorting']) ? trim($_GET['sorting']) : '';

// Get the category_id from the form
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';

// Get the price filters from the form
$min_price = isset($_GET['min_price']) ? $_GET['min_price'] : '';
$max_price = isset($_GET['max_price']) ? $_GET['max_price'] : '';

// Get the color and size filters from the form
$colors = isset($_GET['colors']) ? $_GET['colors'] : [];
$sizes = isset($_GET['sizes']) ? $_GET['sizes'] : [];

// Get the products that match the filters
$products = getTable(
  'product',
  $search,
  $sorting,
  $min_price,
  $max_price,
  $colors,
  $sizes,
  $category_id
);


      if (mysqli_num_rows($products) > 0) {
        foreach ($products as $item) {
          ?>
          <div class="product-col">
            <div class="top">
              <img src="assets/uploads/<?php echo $item["image"]; ?>" alt="<?php echo $item["name"]; ?>" class="img">
              <div class="like">
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="bottom">
              <div class="product-details">
                <div class="title">
                  <h4>
                    <?php echo $item["name"]; ?>
                  </h4>
                </div>
                <div class="rating-group">
                  <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <h5>5.0 (# of reviews)</h5>
                  </div>
                  <h2 class="price">
                    <?php echo "₱" . $item["price"]; ?>
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "There are no products found.";
      }
      ?>
    </div>
    <div class="pagination">
      <ul class="page-select">
        <li class="select">1</li>
        <li class="select">2</li>
        <li class="select">3</li>
        <li class="select">4</li>
      </ul>
    </div>
  </section>
</main>