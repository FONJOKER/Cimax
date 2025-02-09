<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> datatables </span> components with a
      little customization that suits its design standards. For more information, please see the official <a
        class="font-weight-bold" href="https://datatables.net/" target="_blank"> Datatables Documentaion.</a></p>
  </div>
</div>

<!-- Products Inventory -->
<div class="card card-default">
  <div class="card-header">
    <h2>Products Inventory</h2>

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-data-tables" role="button" aria-expanded="false"
      aria-controls="collapse-data-tables"> </a>

  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-data-tables">
      <pre class="language-html mb-4">
<code >
&lt;table id="productsTable" class="table table-hover table-product" style="width:100%">
  &lt;thead>
    &lt;tr>
      &lt;th>Image&lt;/th>
      &lt;th>Product Name&lt;/th>
      &lt;th>ID&lt;/th>
      &lt;th>Qty&lt;/th>
      &lt;th>Variants&lt;/th>
      &lt;th>Committed&lt;/th>
      &lt;th>User Activity&lt;/th>
      &lt;th>Sold&lt;/th>
      &lt;th>In Stock&lt;/th>
      &lt;th>&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-01.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Coach Swagger&lt;/td>
      &lt;td>24541&lt;/td>
      &lt;td>27&lt;/td>
      &lt;td>1&lt;/td>
      &lt;td>2&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-01">&lt;/div>
      &lt;/td>
      &lt;td>4&lt;/td>
      &lt;td>18&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-02.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Toddler Shoes, Gucci Watch&lt;/td>
      &lt;td>24542&lt;/td>
      &lt;td>18&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>5&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-02">&lt;/div>
      &lt;/td>
      &lt;td>1&lt;/td>
      &lt;td>14&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-03.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Hat Black Suits&lt;/td>
      &lt;td>24543&lt;/td>
      &lt;td>20&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-03">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>26&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-04.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Backpack Gents&lt;/td>
      &lt;td>24544&lt;/td>
      &lt;td>37&lt;/td>
      &lt;td>8&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-04">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-05.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Speed 500 Ignite&lt;/td>
      &lt;td>24545&lt;/td>
      &lt;td>8&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>4&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-05">&lt;/div>
      &lt;/td>
      &lt;td>8&lt;/td>
      &lt;td>42&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-06.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Olay&lt;/td>
      &lt;td>24546&lt;/td>
      &lt;td>19&lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-06">&lt;/div>
      &lt;/td>
      &lt;td>79&lt;/td>
      &lt;td>12&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-07.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Ledger Nano X&lt;/td>
      &lt;td>24547&lt;/td>
      &lt;td>61&lt;/td>
      &lt;td>46&lt;/td>
      &lt;td>18&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-07">&lt;/div>
      &lt;/td>
      &lt;td>76&lt;/td>
      &lt;td>36&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-08.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Surface Laptop 2&lt;/td>
      &lt;td>24548&lt;/td>
      &lt;td>33&lt;/td>
      &lt;td>56&lt;/td>
      &lt;td>89&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-08">&lt;/div>
      &lt;/td>
      &lt;td>38&lt;/td>
      &lt;td>5&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-09.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>TIGI Bed Head Superstar Queen&lt;/td>
      &lt;td>24549&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>9&lt;/td>
      &lt;td>15&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-09">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>46&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-10.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Wattbike Atom&lt;/td>
      &lt;td>24550&lt;/td>
      &lt;td>61&lt;/td>
      &lt;td>56&lt;/td>
      &lt;td>68&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-10">&lt;/div>
      &lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>19&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-11.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Smart Watch&lt;/td>
      &lt;td>24551&lt;/td>
      &lt;td>19&lt;/td>
      &lt;td>76&lt;/td>
      &lt;td>38&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-11">&lt;/div>
      &lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>17&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-12.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Magic Bullet Blender&lt;/td>
      &lt;td>24552&lt;/td>
      &lt;td>12&lt;/td>
      &lt;td>30&lt;/td>
      &lt;td>14&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-12">&lt;/div>
      &lt;/td>
      &lt;td>26&lt;/td>
      &lt;td>9&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-13.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Kanana rucksack&lt;/td>
      &lt;td>24553&lt;/td>
      &lt;td>14&lt;/td>
      &lt;td>65&lt;/td>
      &lt;td>39&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-13">&lt;/div>
      &lt;/td>
      &lt;td>9&lt;/td>
      &lt;td>55&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-14.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Copic Opaque White&lt;/td>
      &lt;td>24554&lt;/td>
      &lt;td>43&lt;/td>
      &lt;td>29&lt;/td>
      &lt;td>75&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-14">&lt;/div>
      &lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>15&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-15.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Headphones&lt;/td>
      &lt;td>24555&lt;/td>
      &lt;td>17&lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-15">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>98&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>
</code>
      </pre>
    </div>
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>ID</th>
          <th>Qty</th>
          <th>Variants</th>
          <th>Committed</th>
          <th>User Activity</th>
          <th>Sold</th>
          <th>In Stock</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-01.jpg" alt="Product Image">
          </td>
          <td>Coach Swagger</td>
          <td>24541</td>
          <td>27</td>
          <td>1</td>
          <td>2</td>
          <td>
            <div id="tbl-chart-01"></div>
          </td>
          <td>4</td>
          <td>18</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-02.jpg" alt="Product Image">
          </td>
          <td>Toddler Shoes, Gucci Watch</td>
          <td>24542</td>
          <td>18</td>
          <td>7</td>
          <td>5</td>
          <td>
            <div id="tbl-chart-02"></div>
          </td>
          <td>1</td>
          <td>14</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-03.jpg" alt="Product Image">
          </td>
          <td>Hat Black Suits</td>
          <td>24543</td>
          <td>20</td>
          <td>3</td>
          <td>7</td>
          <td>
            <div id="tbl-chart-03"></div>
          </td>
          <td>6</td>
          <td>26</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-04.jpg" alt="Product Image">
          </td>
          <td>Backpack Gents</td>
          <td>24544</td>
          <td>37</td>
          <td>8</td>
          <td>3</td>
          <td>
            <div id="tbl-chart-04"></div>
          </td>
          <td>6</td>
          <td>7</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-05.jpg" alt="Product Image">
          </td>
          <td>Speed 500 Ignite</td>
          <td>24545</td>
          <td>8</td>
          <td>3</td>
          <td>4</td>
          <td>
            <div id="tbl-chart-05"></div>
          </td>
          <td>8</td>
          <td>42</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-06.jpg" alt="Product Image">
          </td>
          <td>Olay</td>
          <td>24546</td>
          <td>19</td>
          <td>6</td>
          <td>6</td>
          <td>
            <div id="tbl-chart-06"></div>
          </td>
          <td>79</td>
          <td>12</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-07.jpg" alt="Product Image">
          </td>
          <td>Ledger Nano X</td>
          <td>24547</td>
          <td>61</td>
          <td>46</td>
          <td>18</td>
          <td>
            <div id="tbl-chart-07"></div>
          </td>
          <td>76</td>
          <td>36</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-08.jpg" alt="Product Image">
          </td>
          <td>Surface Laptop 2</td>
          <td>24548</td>
          <td>33</td>
          <td>56</td>
          <td>89</td>
          <td>
            <div id="tbl-chart-08"></div>
          </td>
          <td>38</td>
          <td>5</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-09.jpg" alt="Product Image">
          </td>
          <td>TIGI Bed Head Superstar Queen</td>
          <td>24549</td>
          <td>3</td>
          <td>9</td>
          <td>15</td>
          <td>
            <div id="tbl-chart-09"></div>
          </td>
          <td>6</td>
          <td>46</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-10.jpg" alt="Product Image">
          </td>
          <td>Wattbike Atom</td>
          <td>24550</td>
          <td>61</td>
          <td>56</td>
          <td>68</td>
          <td>
            <div id="tbl-chart-10"></div>
          </td>
          <td>3</td>
          <td>19</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-11.jpg" alt="Product Image">
          </td>
          <td>Smart Watch</td>
          <td>24551</td>
          <td>19</td>
          <td>76</td>
          <td>38</td>
          <td>
            <div id="tbl-chart-11"></div>
          </td>
          <td>3</td>
          <td>17</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-12.jpg" alt="Product Image">
          </td>
          <td>Magic Bullet Blender</td>
          <td>24552</td>
          <td>12</td>
          <td>30</td>
          <td>14</td>
          <td>
            <div id="tbl-chart-12"></div>
          </td>
          <td>26</td>
          <td>9</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-13.jpg" alt="Product Image">
          </td>
          <td>Kanana rucksack</td>
          <td>24553</td>
          <td>14</td>
          <td>65</td>
          <td>39</td>
          <td>
            <div id="tbl-chart-13"></div>
          </td>
          <td>9</td>
          <td>55</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-14.jpg" alt="Product Image">
          </td>
          <td>Copic Opaque White</td>
          <td>24554</td>
          <td>43</td>
          <td>29</td>
          <td>75</td>
          <td>
            <div id="tbl-chart-14"></div>
          </td>
          <td>7</td>
          <td>15</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-15.jpg" alt="Product Image">
          </td>
          <td>Headphones</td>
          <td>24555</td>
          <td>17</td>
          <td>6</td>
          <td>7</td>
          <td>
            <div id="tbl-chart-15"></div>
          </td>
          <td>6</td>
          <td>98</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>



      </tbody>
    </table>

  </div>
</div>
</div>
          
        </div>