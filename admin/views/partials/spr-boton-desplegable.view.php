<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap dropdowns </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/dropdowns/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="row">

  <div class="col-xl-6">
    <!-- Buttons with Dropdown -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Buttons with Dropdown</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-btn-drop-1" role="button"
          aria-expanded="false" aria-controls="collapse-btn-drop-1"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-btn-drop-1">
          <pre class="language-html mb-4">
<code >
&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Primary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Secondary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Success
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Info
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static"> Warning
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static"> Danger
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>
</code>
          </pre>
        </div>

        <div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Primary
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Secondary
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Success
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Info
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static"> Warning
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static"> Danger
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Split Buttons Dropdown -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Split Buttons Dropdown</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-btn-drop-3" role="button"
          aria-expanded="false" aria-controls="collapse-btn-drop-3"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-btn-drop-3">
          <pre class="language-html mb-4">
<code >
&lt;!-- Example single primary button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-primary">Primary&lt;/button>
  &lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single secondary button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-secondary">Secondary&lt;/button>
  &lt;button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single success button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-success">Success&lt;/button>
  &lt;button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single info button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-info">Info&lt;/button>
  &lt;button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single warning button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-warning">Warning&lt;/button>
  &lt;button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single danger button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-danger">Danger&lt;/button>
  &lt;button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>
</code>
          </pre>
        </div>

        <div class="btn-group mb-1">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

        <div class="btn-group mb-1">
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

        <div class="btn-group mb-1">
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

        <div class="btn-group mb-1">
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

        <div class="btn-group mb-1">
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

        <div class="btn-group mb-1">
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

      </div>
    </div>

    <!-- Large Buttons with Dropdown -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Large Buttons with Dropdown</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-btn-drop-5" role="button"
          aria-expanded="false" aria-controls="collapse-btn-drop-5"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-btn-drop-5">
          <pre class="language-html mb-4">
<code >
&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Primary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single secondary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Secondary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single success button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-success btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Success
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single info button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-info btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Info
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single warning button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-warning btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Warning
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single danger button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Danger
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>
</code>
          </pre>
        </div>

        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            Primary
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            Secondary
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-success btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            Success
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-info btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            Info
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-warning btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            Warning
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            Danger
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="col-xl-6">
    <!-- Outline Buttons with Dropdown -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Outline Buttons with Dropdown</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-btn-drop-2" role="button"
          aria-expanded="false" aria-controls="collapse-btn-drop-2"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-btn-drop-2">
          <pre class="language-html mb-4">
<code >
  &lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Primary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single secondary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Secondary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single success button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Success
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single info button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    Info
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single danger button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static"> Warning
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>
</code>
            </pre>
        </div>

        <div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Primary
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Secondary
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Success
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
              Info
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-1">
            <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static"> Warning
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Outline Split Buttons with Dropdown -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Outline Split Buttons with Dropdown</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-btn-drop-4" role="button"
          aria-expanded="false" aria-controls="collapse-btn-drop-4"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-btn-drop-4">
          <pre class="language-html mb-4">
<code >
&lt;!-- Example single primary button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-outline-primary">Primary&lt;/button>
  &lt;button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single secondary button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-outline-secondary">Secondary&lt;/button>
  &lt;button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single success button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-outline-success">Success&lt;/button>
  &lt;button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single info button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-outline-info">Info&lt;/button>
  &lt;button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single warning button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-outline-warning">Warning&lt;/button>
  &lt;button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single danger button -->
&lt;div class="btn-group mb-1">
  &lt;button type="button" class="btn btn-outline-danger">Danger&lt;/button>
  &lt;button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" data-display="static">
    &lt;span class="sr-only">Toggle Dropdown&lt;/span>
  &lt;/button>
  &lt;div class="dropdown-menu">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>
</code>
          </pre>
        </div>

        <div class="btn-group mb-1">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-1">
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-1">
          <button type="button" class="btn btn-outline-success">Success</button>
          <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-1">
          <button type="button" class="btn btn-outline-info">Info</button>
          <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-1">
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-1">
          <button type="button" class="btn btn-outline-danger">Danger</button>
          <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-display="static">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

      </div>
    </div>

    <!-- Large Outline Split Buttons with Dropdown -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Large Outline Split Buttons with Dropdown</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-btn-drop-8" role="button"
          aria-expanded="false" aria-controls="collapse-btn-drop-8"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-btn-drop-8">
          <pre class="language-html mb-4">
<code>

&lt;!-- Example single primary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
    Primary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single secondary button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
    Secondary
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single success button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-success btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
    Success
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single info button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-info btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
    Info
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single warning button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-warning btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
    Warning
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>

&lt;!-- Example single danger button -->
&lt;div class="dropdown d-inline-block mb-1">
  &lt;button class="btn btn-outline-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
    Danger
  &lt;/button>
  &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    &lt;a class="dropdown-item" href="#">Action&lt;/a>
    &lt;a class="dropdown-item" href="#">Another action&lt;/a>
    &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
  &lt;/div>
&lt;/div>
</code>
          </pre>
        </div>

        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-outline-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Primary
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Secondary
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-outline-success btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Success
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-outline-info btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Info
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-outline-warning btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Warning
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown d-inline-block mb-1">
          <button class="btn btn-outline-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Danger
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

      </div>
    </div>

  </div>

</div>
</div>
          
        </div>