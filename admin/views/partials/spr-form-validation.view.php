<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap Forms Validation </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/forms/#validation" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="row">
  <div class="col-xl-6">
    <!-- Basic Checkbox -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Basic Checkbox</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-from-validation" role="button"
          aria-expanded="false" aria-controls="collapse-from-validation"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-from-validation">
          <pre class="language-html mb-4">
<code >
&lt;form>
  &lt;div class="form-row">
    &lt;div class="col-md-12 mb-3">
      &lt;label for="validationServer01">Input with success&lt;/label>
      &lt;input type="text" class="form-control border-success" id="validationServer01" placeholder="First name" required>
      &lt;div class="text-success small mt-1">
        Looks good!
      &lt;/div>
    &lt;/div>
    &lt;div class="col-md-12 mb-3">
      &lt;label for="validationServer02">Input with info&lt;/label>
      &lt;input type="text" class="form-control border-info" id="validationServer02" placeholder="Last name"
        value="Last Name" required>
      &lt;div class="text-info small mt-1">
        We'll never share your email with anyone else.
      &lt;/div>
    &lt;/div>
    &lt;div class="col-md-12 mb-3">
      &lt;label for="validationServer02">Input with warning&lt;/label>
      &lt;input type="text" class="form-control border-warning" id="validationServer02" placeholder="Last name"
        value="Last Name" required>
      &lt;div class="text-warning small mt-1">
        Shucks, check the formatting of that and try again.
      &lt;/div>
    &lt;/div>
    &lt;div class="col-md-12 mb-3">
      &lt;label for="validationServer02">Input with danger&lt;/label>
      &lt;input type="text" class="form-control border-danger" id="validationServer02" placeholder="Last name"
        value="Last Name" required>
      &lt;div class="text-daborder-danger small mt-1">
        Sorry, that username's taken. Try another?
      &lt;/div>
    &lt;/div>
  &lt;/div>
  &lt;button class="btn btn-primary btn-pill mr-2" type="submit">Submit&lt;/button>
  &lt;button class="btn btn-light btn-pill" type="submit">Cancel&lt;/button>
&lt;/form>
</code>
          </pre>
        </div>

        <form>
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationServer01">Input with success</label>
              <input type="text" class="form-control border-success" id="validationServer01" placeholder="First name" required >
              <div class="text-success small mt-1">
                Looks good!
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <label for="validationServer02">Input with info</label>
              <input type="text" class="form-control border-info" id="validationServer02" placeholder="Last name" value="Last Name"
                required>
              <div class="text-info small mt-1">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <label for="validationServer02">Input with warning</label>
              <input type="text" class="form-control border-warning" id="validationServer02" placeholder="Last name" value="Last Name"
                required>
              <div class="text-warning small mt-1">
                Shucks, check the formatting of that and try again.
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <label for="validationServer02">Input with danger</label>
              <input type="text" class="form-control border-danger" id="validationServer02" placeholder="Last name"
                value="Last Name" required>
              <div class="text-daborder-danger small mt-1">
                Sorry, that username's taken. Try another?
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
          <button class="btn btn-light btn-pill" type="submit">Cancel</button>
        </form>

      </div>
    </div>

    <!-- Iconic Validation -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Iconic Validation</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-form-validation-iconic" role="button"
          aria-expanded="false" aria-controls="collapse-form-validation-iconic"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-form-validation-iconic">
          <pre class="language-html mb-4">
<code >
&lt;form>
  &lt;div class="mb-5">
    &lt;label for="validationServer01">Left Addon&lt;/label>
    &lt;div class="input-group">
      &lt;div class="input-group-prepend">
        &lt;span class="input-group-text" id="basic-addon1">@&lt;/span>
      &lt;/div>
      &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username"
        aria-describedby="basic-addon1">
    &lt;/div>
    &lt;div class="text-success small mt-1">
      Looks good!
    &lt;/div>
  &lt;/div>

  &lt;div class="mb-5">
    &lt;label for="validationServer01">Right Addon&lt;/label>
    &lt;div class="input-group">
      &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
        aria-describedby="basic-addon2">
      &lt;div class="input-group-append">
        &lt;span class="input-group-text" id="basic-addon2">@example.com&lt;/span>
      &lt;/div>
    &lt;/div>
    &lt;div class="text-warning small mt-1">
      Shucks, check the formatting of that and try again.
    &lt;/div>
  &lt;/div>

  &lt;div class="mb-5">
    &lt;label for="validationServer01">Input with danger&lt;/label>
    &lt;div class="input-group">
      &lt;div class="input-group-prepend">
        &lt;span class="input-group-text">$&lt;/span>
      &lt;/div>
      &lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      &lt;div class="input-group-append">
        &lt;span class="input-group-text">.00&lt;/span>
      &lt;/div>
    &lt;/div>
    &lt;div class="text-danger small mt-1">
      Sorry, that username's taken. Try another?
    &lt;/div>
  &lt;/div>

  &lt;button class="btn btn-primary btn-pill mr-2" type="submit">Submit&lt;/button>
  &lt;button class="btn btn-light btn-pill" type="submit">Cancel&lt;/button>
&lt;/form>
</code>
          </pre>
        </div>

        <form>
          <div class="mb-5">
            <label for="validationServer01">Left Addon</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="text-success small mt-1">
              Looks good!
            </div>
          </div>

          <div class="mb-5">
            <label for="validationServer01">Right Addon</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
              </div>
            </div>
            <div class="text-warning small mt-1">
              Shucks, check the formatting of that and try again.
            </div>
          </div>

          <div class="mb-5">
            <label for="validationServer01">Input with danger</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>
            <div class="text-danger small mt-1">
              Sorry, that username's taken. Try another?
            </div>
          </div>

          <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
          <button class="btn btn-light btn-pill" type="submit">Cancel</button>
        </form>

      </div>
    </div>

  </div>
  <div class="col-xl-6">
    <!-- Horizontal Validation -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Horizontal Validation</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-horizontal-validation" role="button"
          aria-expanded="false" aria-controls="collapse-horizontal-validation"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-horizontal-validation">
          <pre class="language-html mb-4">
<code >
&lt;form>
  &lt;div class="form-group row mb-6">
    &lt;label for="staticEmail" class="col-sm-4 col-form-label">Input with success&lt;/label>
    &lt;div class="col-sm-8">
      &lt;input type="text" class="form-control border-success" id="validationServer01" placeholder="First name" required>
      &lt;div class="text-success small mt-1">
        Looks good!
      &lt;/div>
    &lt;/div>
  &lt;/div>

  &lt;div class="form-group row mb-6">
    &lt;label for="staticEmail" class="col-sm-4 col-form-label">Input with info&lt;/label>
    &lt;div class="col-sm-8">
      &lt;input type="text" class="form-control border-info" id="validationServer01" placeholder="First name" required>
      &lt;div class="text-info small mt-1">
        Looks good!
      &lt;/div>
    &lt;/div>
  &lt;/div>

  &lt;div class="form-group row mb-6">
    &lt;label for="staticEmail" class="col-sm-4 col-form-label">Input with warning&lt;/label>
    &lt;div class="col-sm-8">
      &lt;input type="text" class="form-control border-warning" id="validationServer01" placeholder="First name" required>
      &lt;div class="text-warning small mt-1">
        Looks good!
      &lt;/div>
    &lt;/div>
  &lt;/div>

  &lt;div class="form-group row mb-6">
    &lt;label for="staticEmail" class="col-sm-4 col-form-label">Input with danger&lt;/label>
    &lt;div class="col-sm-8">
      &lt;input type="text" class="form-control border-danger" id="validationServer01" placeholder="First name" required>
      &lt;div class="text-danger small mt-1">
        Looks good!
      &lt;/div>
    &lt;/div>
  &lt;/div>

  &lt;button class="btn btn-primary btn-pill mr-2" type="submit">Submit&lt;/button>
  &lt;button class="btn btn-light btn-pill" type="submit">Cancel&lt;/button>
&lt;/form>
</code>
          </pre>
        </div>

        <form>
          <div class="form-group row mb-6">
            <label for="staticEmail" class="col-sm-4 col-form-label">Input with success</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border-success" id="validationServer01" placeholder="First name" required>
              <div class="text-success small mt-1">
                Looks good!
              </div>
            </div>
          </div>

          <div class="form-group row mb-6">
            <label for="staticEmail" class="col-sm-4 col-form-label">Input with info</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border-info" id="validationServer01" placeholder="First name" required>
              <div class="text-info small mt-1">
                Looks good!
              </div>
            </div>
          </div>

          <div class="form-group row mb-6">
            <label for="staticEmail" class="col-sm-4 col-form-label">Input with warning</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border-warning" id="validationServer01" placeholder="First name" required>
              <div class="text-warning small mt-1">
                Looks good!
              </div>
            </div>
          </div>

          <div class="form-group row mb-6">
            <label for="staticEmail" class="col-sm-4 col-form-label">Input with danger</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border-danger" id="validationServer01" placeholder="First name" required>
              <div class="text-danger small mt-1">
                Looks good!
              </div>
            </div>
          </div>

          <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
          <button class="btn btn-light btn-pill" type="submit">Cancel</button>
        </form>

      </div>
    </div>

    <!-- Button Addons Validation -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Button Addons Validation</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-button-addons-validation" role="button"
          aria-expanded="false" aria-controls="collapse-button-addons-validation"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-button-addons-validation">
          <pre class="language-html mb-4">
<code >
&lt;form>
  &lt;div class="mb-5">
    &lt;label for="validationServer01">Left Addon&lt;/label>
    &lt;div class="input-group">
      &lt;div class="input-group-prepend">
        &lt;button class="btn btn-primary" type="button">go&lt;/button>
      &lt;/div>
      &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username"
        aria-describedby="basic-addon1">
    &lt;/div>
    &lt;div class="text-success small mt-1">
      Looks good!
    &lt;/div>
  &lt;/div>

  &lt;div class="mb-5">
    &lt;label for="validationServer01">Right Addon&lt;/label>
    &lt;div class="input-group">
      &lt;input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
        aria-describedby="basic-addon2" placeholder="Search for...">
      &lt;div class="input-group-prepend">
        &lt;button class="btn btn-primary" type="button">go&lt;/button>
      &lt;/div>
    &lt;/div>

    &lt;div class="text-warning small mt-1">
      Shucks, check the formatting of that and try again.
    &lt;/div>
  &lt;/div>

  &lt;div class="mb-5">
    &lt;label for="validationServer01">Input with danger&lt;/label>
    &lt;div class="input-group">
      &lt;div class="input-group-prepend">
        &lt;button class="btn btn-primary" type="button">go&lt;/button>
      &lt;/div>
      &lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      &lt;div class="input-group-append">
        &lt;button class="btn btn-danger" type="button">go&lt;/button>
      &lt;/div>
    &lt;/div>
    &lt;div class="text-danger small mt-1">
      Sorry, that username's taken. Try another?
    &lt;/div>
  &lt;/div>

  &lt;button class="btn btn-primary btn-pill mr-2" type="submit">Submit&lt;/button>
  &lt;button class="btn btn-light btn-pill" type="submit">Cancel&lt;/button>

&lt;/form>
</code>
          </pre>
        </div>

        <form>
          <div class="mb-5">
            <label for="validationServer01">Left Addon</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn btn-primary" type="button">go</button>
              </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
            </div>
            <div class="text-success small mt-1">
              Looks good!
            </div>
          </div>

          <div class="mb-5">
            <label for="validationServer01">Right Addon</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="settings" aria-label="Recipient's username"
                aria-describedby="basic-addon2" placeholder="Search for...">
              <div class="input-group-prepend">
                <button class="btn btn-primary" type="button">go</button>
              </div>
            </div>

            <div class="text-warning small mt-1">
              Shucks, check the formatting of that and try again.
            </div>
          </div>

          <div class="mb-5">
            <label for="validationServer01">Input with danger</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn btn-primary" type="button">go</button>
              </div>
              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <button class="btn btn-danger" type="button">go</button>
              </div>
            </div>
            <div class="text-danger small mt-1">
              Sorry, that username's taken. Try another?
            </div>
          </div>

          <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
          <button class="btn btn-light btn-pill" type="submit">Cancel</button>

        </form>

      </div>
    </div>


  </div>
</div>

</div>
          
        </div>