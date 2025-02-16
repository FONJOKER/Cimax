<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap tabs </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/navs/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="row">
  <div class="col-xl-6">
    <!-- Default Tabs -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Default Tabs</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-default" role="button"
          aria-expanded="false" aria-controls="collapse-nav-default"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-default">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home" role="tab"
      aria-controls="nav-tabs" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile" role="tab"
      aria-controls="nav-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="nav-tabs-home" role="tabpanel" aria-labelledby="nav-home-tab"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
          <div class="border p-6">
            <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home" role="tab"
                  aria-controls="nav-tabs" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile" role="tab"
                  aria-controls="nav-profile" aria-selected="false">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                  aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <div class="tab-content mt-5" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-tabs-home" role="tabpanel" aria-labelledby="nav-home-tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum exercitationem
                blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem quaerat
                officiis perferendis hic? Pariatur minima iusto voluptate qui.
              </div>
            </div>

          </div>
      </div>
    </div>

    <!-- Tab with Icons -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Tab with Icons</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-with-icon" role="button"
          aria-expanded="false" aria-controls="collapse-nav-with-icon"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-with-icon">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-tabs mb-3" id="pills-tab2" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab"
      aria-controls="nav-tabs" aria-selected="true"&gt;
      &lt;i class="mdi mdi-star-outline"&gt;&lt;/i&gt;
      Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
      aria-controls="nav-profile" aria-selected="false"&gt;
      &lt;i class="mdi mdi-account"&gt;&lt;/i&gt;
      Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;
      &lt;i class="mdi mdi-checkbox-multiple-blank-outline"&gt;&lt;/i&gt;
      Dropdown&lt;/a&gt;

    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="border p-6">
          <ul class="nav nav-tabs mb-3" id="pills-tab2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab" aria-controls="nav-tabs" aria-selected="true">
                <i class="mdi mdi-star-outline"></i>
                Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
                aria-controls="nav-profile" aria-selected="false">
                <i class="mdi mdi-account"></i>
                Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                Dropdown</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab">
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
              magna
              aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </div>
            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
              Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
              exercitationem
              blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem
              quaerat
              officiis perferendis hic? Pariatur minima iusto voluptate qui.
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Tab with Underline -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Tab with Underline</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-underline" role="button"
          aria-expanded="false" aria-controls="collapse-nav-underline"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-underline">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-underline-active-primary mb-3" id="pills-tab2" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab"
      aria-controls="nav-tabs" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
      aria-controls="nav-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;Dropdown&lt;/a&gt;

    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="border p-6">
          <ul class="nav nav-underline-active-primary mb-3" id="pills-tab2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab"
                aria-controls="nav-tabs" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
                aria-controls="nav-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab">
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
              magna
              aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </div>
            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
              Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
              exercitationem
              blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem
              quaerat
              officiis perferendis hic? Pariatur minima iusto voluptate qui.
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Justified Tabs -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Justified Tabs</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-underline-justify" role="button"
          aria-expanded="false" aria-controls="collapse-nav-underline-justify"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-underline-justify">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary" role="tab"
      aria-controls="nav-tabs" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-underline-primary" role="tab"
      aria-controls="nav-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;Dropdown&lt;/a&gt;

    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="nav-home-underline-primary" role="tabpanel" aria-labelledby="nav-home-tab"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="nav-profile-underline-primary" role="tabpanel" aria-labelledby="nav-profile-tab"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="border p-6">
          <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary" role="tab"
                aria-controls="nav-tabs" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-underline-primary" role="tab"
                aria-controls="nav-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home-underline-primary" role="tabpanel" aria-labelledby="nav-home-tab">
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
              magna
              aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </div>
            <div class="tab-pane fade" id="nav-profile-underline-primary" role="tabpanel" aria-labelledby="nav-profile-tab">
              Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
              exercitationem
              blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem
              quaerat
              officiis perferendis hic? Pariatur minima iusto voluptate qui.
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="col-xl-6">
    <!-- Pill Tabs -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Pill Tabs</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-pill" role="button"
          aria-expanded="false" aria-controls="collapse-nav-pill"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-pill">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
      aria-controls="pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
      aria-controls="pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="nav-profile-tab"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="border p-6">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              orem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum exercitationem
              blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem quaerat
              officiis perferendis hic? Pariatur minima iusto voluptate qui.
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Tab with Icons -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Tab with Icons</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-pill-with-icon" role="button"
          aria-expanded="false" aria-controls="collapse-nav-pill-with-icon"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-pill-with-icon">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab"
      aria-controls="nav-tabs" aria-selected="true"&gt;
      &lt;i class="mdi mdi-star-outline"&gt;&lt;/i&gt;
      Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
      aria-controls="nav-profile" aria-selected="false"&gt;
      &lt;i class="mdi mdi-account"&gt;&lt;/i&gt;
      Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;
      &lt;i class="mdi mdi-checkbox-multiple-blank-outline"&gt;&lt;/i&gt;
      Dropdown&lt;/a&gt;

    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="border p-6">
          <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab" aria-controls="nav-tabs" aria-selected="true">
                <i class="mdi mdi-star-outline"></i>
                Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
                aria-controls="nav-profile" aria-selected="false">
                <i class="mdi mdi-account"></i>
                Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                Dropdown</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab">
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
              magna
              aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </div>
            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
              Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
              exercitationem
              blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem
              quaerat
              officiis perferendis hic? Pariatur minima iusto voluptate qui.
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Pill Tabs -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Pill Tabs</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-custom-pill" role="button"
          aria-expanded="false" aria-controls="collapse-nav-custom-pill"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-custom-pill">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-custom-pills mb-3" id="pills-tab-custom" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home-custom-pill" role="tab"
      aria-controls="pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile-custom-pill" role="tab"
      aria-controls="pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="pills-home-custom-pill" role="tabpanel" aria-labelledby="pills-home-tab"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="pills-profile-custom-pill" role="tabpanel" aria-labelledby="nav-profile-tab"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="border p-6">
          <ul class="nav nav-custom-pills mb-3" id="pills-tab-custom" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home-custom-pill" role="tab"
                aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile-custom-pill" role="tab"
                aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="pills-home-custom-pill" role="tabpanel" aria-labelledby="pills-home-tab">
              lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
              magna
              aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo
              consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </div>
            <div class="tab-pane fade" id="pills-profile-custom-pill" role="tabpanel" aria-labelledby="nav-profile-tab">
              Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
              exercitationem
              blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem
              quaerat
              officiis perferendis hic? Pariatur minima iusto voluptate qui.
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Justified Pill Tabs -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Justified Pill Tabs</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-pull-justified" role="button"
          aria-expanded="false" aria-controls="collapse-nav-pull-justified"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-nav-pull-justified">
          <pre class="language-html mb-4">
<code>
&lt;ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home-justify-content-between"
      role="tab" aria-controls="pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile-justify-content-between"
      role="tab" aria-controls="pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mt-5" id="nav-tabContent"&gt;
  &lt;div class="tab-pane fade show active" id="pills-home-justify-content-between" role="tabpanel"
    aria-labelledby="pills-home-tab"&gt;
    orem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
    magna
    aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo
    consequat. Duis
    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="pills-profile-justify-content-between" role="tabpanel"
    aria-labelledby="nav-profile-tab"&gt;
    Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
    exercitationem
    blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem
    quaerat
    officiis perferendis hic? Pariatur minima iusto voluptate qui.
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="border p-6">
          <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home-justify-content-between" role="tab"
                aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile-justify-content-between" role="tab"
                aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="pills-home-justify-content-between" role="tabpanel" aria-labelledby="pills-home-tab">
              orem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
              magna
              aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo
              consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
            </div>
            <div class="tab-pane fade" id="pills-profile-justify-content-between" role="tabpanel" aria-labelledby="nav-profile-tab">
              Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
              exercitationem
              blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at, quae rem
              quaerat
              officiis perferendis hic? Pariatur minima iusto voluptate qui.
            </div>
          </div>

        </div>
      </div>
    </div>


  </div>
</div>
</div>
          
        </div>