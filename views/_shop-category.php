  <!-- Shop -->
  <main class="shop-container">
    <!-- Shop Filter -->
    <section class="filter">
      <div class="header-filter" id="filter-btn">
        <h4 class="header-filter-name">Filters</h4>
        <i class="fa-solid fa-filter"></i>
      </div>
      <div class="bottom-filter" id="filters">
        <ul class="categories-filter">
          <li>
            <h4>Category 1</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 2</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 3</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 4</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 5</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 6</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 7</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
        </ul>
        <div class="filter">
          <button id="price-btn">
            <h3>Price</h3>
            <i class="fa-solid fa-angle-down" id="price-toggle"></i>
          </button>
          <input type="text" placeholder="Price" class="price-filter">
        </div>
        <div class="filter">
          <button id="color-btn">
            <h3>Colors</h3>
            <i class="fa-solid fa-angle-down" id="color-toggle"></i>
          </button>
          <div class="colors color-filter">
            <div class="group">
              <button class="select red"></button>
              <h4>Red</h4>
            </div>
            <div class="group">
              <button class="select blue"></button>
              <h4>Blue</h4>
            </div>
            <div class="group">
              <button class="select yellow"></button>
              <h4>Yellow</h4>
            </div>
            <div class="group">
              <button class="select green"></button>
              <h4>Green</h4>
            </div>
            <div class="group">
              <button class="select white"></button>
              <h4>White</h4>
            </div>
          </div>
        </div>
        <div class="filter">
          <button id="size-btn">
            <h3>Size</h3>
            <i class="fa-solid fa-angle-down" id="size-toggle"></i>
          </button>
          <div class="sizes size-filter">
            <button class="select">
              <h4>XXS</h4>
            </button>
            <button class="select">
              <h4>XS</h4>
            </button>
            <button class="select">
              <h4>S</h4>
            </button>
            <button class="select">
              <h4>M</h4>
            </button>
            <button class="select">
              <h4>L</h4>
            </button>
            <button class="select">
              <h4>XL</h4>
            </button>
            <button class="select">
              <h4>XXL</h4>
            </button>
          </div>
        </div>
      </div>

    </section>
    <!-- Shop Products -->
    <section class="products">
      <div class="header-details">
        <h2 class="title">Product Name Placeholder</h2>
        <div class="sort">
          <button>New</button>
          <button>Popular</button>
        </div>
      </div>
      <!-- Product Grid -->
      <div class="product-grid grid-main">
        <?php
        $category_id = '';
        if (isset($_GET['category'])) {
            $category_id = $_GET['category'];
        }
        $products = getProdByCategory($category_id);
        

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
                  <h4><?php echo $item["name"]; ?></h4>
                  <div class="group">
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <h5>5.0 (# of reviews)</h5>
                    </div>
                    <h2 class="price"><?php echo "$" . $item["price"]; ?></h2>
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