<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap pagination </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/pagination/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="card card-default">
  <div class="card-header">
    <h2>pagination</h2>

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-1" role="button"
      aria-expanded="false" aria-controls="collapse-list-group-1"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-list-group-1">
      <pre class="language-html mb-4">
<code >

&lt;!-- Default Pagination --&gt;
&lt;div class="card card-default align-items-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;h2&gt;Default Pagination &lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;

    &lt;nav aria-label="Page navigation example"&gt;
      &lt;ul class="pagination"&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-left"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;
          &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Next"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-right"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Flat Pagination --&gt;
&lt;div class="card card-default align-items-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;h2&gt;Flat Pagination &lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;

    &lt;nav aria-label="Page navigation example"&gt;
      &lt;ul class="pagination pagination-flat "&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-left"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item "&gt;
          &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;
          &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Next"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-right"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Separated Pagination --&gt;
&lt;div class="card card-default align-items-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;h2&gt;Separated Pagination&lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;

    &lt;nav aria-label="Page navigation example"&gt;
      &lt;ul class="pagination pagination-seperated"&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-left mr-1"&gt;&lt;/span&gt; Prev
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;
          &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Next"&gt;
            Next
            &lt;span aria-hidden="true" class="mdi mdi-chevron-right ml-1"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Bordered Rounded --&gt;
&lt;div class="card card-default align-items-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;h2&gt;Bordered Rounded&lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;

    &lt;nav aria-label="Page navigation example"&gt;
      &lt;ul class="pagination border-rounded"&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-left"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;
          &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Next"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-right"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Flat Rounded Pagination --&gt;
&lt;div class="card card-default align-items-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;h2&gt;Flat Rounded Pagination&lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;

    &lt;nav aria-label="Page navigation example"&gt;
      &lt;ul class="pagination pagination-flat pagination-flat-rounded"&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-left"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;
          &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Next"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-right"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Separated Rounded Pagination --&gt;
&lt;div class="card card-default align-items-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;h2&gt;Separated Rounded Pagination&lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;

    &lt;nav aria-label="Page navigation example"&gt;
      &lt;ul class="pagination pagination-seperated pagination-seperated-rounded"&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-left mr-1"&gt;&lt;/span&gt; Prev
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;
          &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Next"&gt;
            Next
            &lt;span aria-hidden="true" class="mdi mdi-chevron-right ml-1"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Right Pagination --&gt;
&lt;div class="card card-default align-items-end"&gt;
  &lt;div class="card-header"&gt;
    &lt;h2&gt;Right Pagination&lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;nav aria-label="Page navigation example"&gt;
      &lt;ul class="pagination"&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-left"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;
          &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
          &lt;a class="page-link" href="#" aria-label="Next"&gt;
            &lt;span aria-hidden="true" class="mdi mdi-chevron-right"&gt;&lt;/span&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/div&gt;


</code>
      </pre>
    </div>

    <div class="row">
      <div class="col-xl-6">
        <!-- Default Pagination -->
        <div class="card card-default align-items-center">
          <div class="card-header">
            <h2>Default Pagination </h2>
          </div>
          <div class="card-body">

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" class="mdi mdi-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Flat Pagination -->
        <div class="card card-default align-items-center">
          <div class="card-header">
            <h2>Flat Pagination </h2>
          </div>
          <div class="card-body">

            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-flat ">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item ">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" class="mdi mdi-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Separated Pagination -->
        <div class="card card-default align-items-center">
          <div class="card-header">
            <h2>Separated Pagination</h2>
          </div>
          <div class="card-body px-0">

            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-seperated">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left mr-lg-1"></span> Prev
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    Next
                    <span aria-hidden="true" class="mdi mdi-chevron-right ml-lg-1"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Bordered Rounded -->
        <div class="card card-default align-items-center">
          <div class="card-header">
            <h2>Bordered Rounded</h2>
          </div>
          <div class="card-body">

            <nav aria-label="Page navigation example">
              <ul class="pagination border-rounded">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" class="mdi mdi-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Flat Rounded Pagination -->
        <div class="card card-default align-items-center">
          <div class="card-header">
            <h2>Flat Rounded Pagination</h2>
          </div>
          <div class="card-body px-0">

            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-flat pagination-flat-rounded">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" class="mdi mdi-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Separated Rounded Pagination -->
        <div class="card card-default align-items-center">
          <div class="card-header">
            <h2>Separated Rounded Pagination</h2>
          </div>
          <div class="card-body">

            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-seperated pagination-seperated-rounded">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left mr-1"></span>
                    <span class="d-none d-lg-inline-block">Prev</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span class="d-none d-lg-inline-block">Next</span>
                    <span aria-hidden="true" class="mdi mdi-chevron-right ml-1"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Left Pagination -->
        <div class="card card-default">
          <div class="card-header">
            <h2>Left Pagination</h2>
          </div>
          <div class="card-body">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" class="mdi mdi-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Center Pagination -->
        <div class="card card-default align-items-center">
          <div class="card-header">
            <h2>Center Pagination</h2>
          </div>
          <div class="card-body">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" class="mdi mdi-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!-- Right Pagination -->
        <div class="card card-default align-items-end">
          <div class="card-header">
            <h2>Right Pagination</h2>
          </div>
          <div class="card-body">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="mdi mdi-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true" class="mdi mdi-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
          
        </div>