<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap input group </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="row">
  <div class="col-xl-6">
    <!-- Basic Example -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Basic Example</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-basic-input-group" role="button"
          aria-expanded="false" aria-controls="collapse-basic-input-group"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-basic-input-group">
          <pre class="language-html mb-4">
<code >
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text" id="basic-addon1"&gt;@&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
    aria-describedby="basic-addon2"&gt;
  &lt;div class="input-group-append"&gt;
    &lt;span class="input-group-text" id="basic-addon2"&gt;@example.com&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;label for="basic-url"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text" id="basic-addon3"&gt;https://example.com/users/&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text"&gt;$&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"&gt;
  &lt;div class="input-group-append"&gt;
    &lt;span class="input-group-text"&gt;.00&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
          </div>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
          </div>
        </div>

        <label for="basic-url">Your vanity URL</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
          </div>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">$</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>

      </div>
    </div>

    <!-- Checkbox & Radio Addons -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Checkbox & Radio Addons</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-checkbox-group" role="button"
          aria-expanded="false" aria-controls="collapse-checkbox-group"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-checkbox-group">
          <pre class="language-html mb-4">
<code >
&lt;label class="text-dark font-weight-medium" for=""&gt;Left checkbox addon&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;div class="input-group-text"&gt;
      &lt;label class="control control-checkbox d-inline-block mb-0"&gt;
        &lt;input type="checkbox" name="checkbox1" /&gt;
        &lt;div class="control-indicator"&gt;&lt;/div&gt;
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with checkbox"&gt;
&lt;/div&gt;

&lt;label class="text-dark font-weight-medium" for=""&gt;Left Radio addon&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;div class="input-group-text"&gt;
      &lt;label class="control control-radio d-inline-block mb-0"&gt;
        &lt;input type="radio" name="radio1" /&gt;
        &lt;div class="control-indicator"&gt;&lt;/div&gt;
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with radio button"&gt;
&lt;/div&gt;

</code>
          </pre>
        </div>
        <form>
          <div class="row">
            <div class="col-md-6">
              <label class="text-dark font-weight-medium" for="">Left checkbox addon</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <label class="control control-checkbox d-inline-block mb-0">
                      <input type="checkbox" name="checkbox1" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with checkbox">
              </div>
            </div>
            <div class="col-md-6">
              <label class="text-dark font-weight-medium" for="">Left Radio addon</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <label class="control control-radio d-inline-block mb-0">
                      <input type="radio" name="radio1" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button">
              </div>
            </div>
            <div class="col-md-6">
              <label class="text-dark font-weight-medium" for="">Right checkbox addon</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Text input with checkbox">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <label class="control control-checkbox d-inline-block mb-0">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label class="text-dark font-weight-medium" for="">Right Radio addon</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Text input with radio button">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <label class="control control-radio d-inline-block mb-0">
                      <input type="radio" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <label class="text-dark font-weight-medium" for="">Left and Right checkbox addon</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <label class="control control-checkbox d-inline-block mb-0">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <label class="control control-checkbox d-inline-block mb-0">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <label class="text-dark font-weight-medium" for="">Left and Right radio addon</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <label class="control control-radio d-inline-block mb-0">
                      <input type="radio" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <label class="control control-radio d-inline-block mb-0">
                      <input type="radio" />
                      <div class="control-indicator"></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>

    <!-- Button with Dropdowns -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Button with Dropdowns</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-button-and-dropdown-group" role="button"
          aria-expanded="false" aria-controls="collapse-button-and-dropdown-group"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-button-and-dropdown-group">
          <pre class="language-html mb-4">
<code >
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false"&gt;Action&lt;/button&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false"&gt;Action&lt;/button&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Action</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Action</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
          <div class="input-group-append">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Dropdown</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Dropdown</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="col-xl-6">

    <!-- Iconic Input Group -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Iconic Input Group</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-icon-input-group" role="button"
          aria-expanded="false" aria-controls="collapse-icon-input-group"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-icon-input-group">
          <pre class="language-html mb-4">
<code >
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-account" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
    aria-describedby="basic-addon2"&gt;
  &lt;div class="input-group-append"&gt;
    &lt;span class="input-group-text mdi mdi-settings" id="basic-addon2"&gt;&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-home" id="basic-addon3"&gt;&lt;span class="ml-2"&gt;example.com&lt;/span&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-email"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"&gt;
  &lt;div class="input-group-append"&gt;
    &lt;span class="input-group-text mdi mdi-map-marker"&gt;&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
          </div>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
          <div class="input-group-append">
            <span class="input-group-text mdi mdi-settings" id="basic-addon2"></span>
          </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-home" id="basic-addon3"><span class="ml-2">example.com</span></span>
          </div>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-email"></span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text mdi mdi-map-marker"></span>
          </div>
        </div>

      </div>
    </div>

    <!-- Button Addons -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Button Addons</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-button-addons-group" role="button"
          aria-expanded="false" aria-controls="collapse-button-addons-group"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-button-addons-group">
          <pre class="language-html mb-4">
<code >
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;button class="btn btn-primary" type="button"&gt;go&lt;/button&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search for..."&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;button class="btn btn-secondary" type="button"&gt;go&lt;/button&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search for..."&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
    aria-describedby="basic-addon2" placeholder="Search for..."&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;button class="btn btn-primary" type="button"&gt;go&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
    aria-describedby="basic-addon2" placeholder="Search for..."&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;button class="btn btn-primary" type="button"&gt;go&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <button class="btn btn-primary" type="button">go</button>
          </div>
          <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search for..." >
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <button class="btn btn-secondary" type="button">go</button>
          </div>
          <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search for...">
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
            aria-describedby="basic-addon2" placeholder="Search for...">
          <div class="input-group-prepend">
            <button class="btn btn-primary" type="button">go</button>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
            aria-describedby="basic-addon2" placeholder="Search for...">
          <div class="input-group-prepend">
            <button class="btn btn-primary" type="button">go</button>
          </div>
        </div>

      </div>
    </div>

    <!-- Iconic Sizing -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Iconic Sizing</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-icon-sizing-group" role="button"
          aria-expanded="false" aria-controls="collapse-icon-sizing-group"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-icon-sizing-group">
          <pre class="language-html mb-4">
<code >
&lt;div class="input-group input-group-sm mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-account" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-account" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group input-group-lg mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-account" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
          </div>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
          </div>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group input-group-lg mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
          </div>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

      </div>
    </div>
  </div>
</div>
</div>
          
        </div>