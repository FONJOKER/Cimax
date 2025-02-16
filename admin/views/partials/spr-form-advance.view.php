<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Mask Plugin </span> components with a
      little customization that suits its design standards. For more information, please see the official <a
        class="font-weight-bold" href="https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html" target="_blank">Mask Plugin Documentaion.</a></p>
  </div>
</div>

<!-- Masked Input -->
<div class="card card-default">
  <div class="card-header">
    <h2>Masked Input</h2>

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-musk" role="button" aria-expanded="false" aria-controls="collapse-input-musk"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-input-musk">
      <pre class="language-html mb-4">
<code >
&lt;!-- Data Input --&gt;
&lt;label class="text-dark font-weight-medium" for=""&gt;Date input&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-calendar" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" data-mask="00/00/0000"&gt;
&lt;/div&gt;
&lt;p style="font-size: 90%"&gt;ex. 99/99/9999&lt;/p&gt;

&lt;!-- Phone input --&gt;
&lt;label class="text-dark font-weight-medium"&gt;Phone input&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-phone" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" data-mask="(999) 999-9999"&gt;
&lt;/div&gt;
&lt;p style="font-size: 90%"&gt;ex. (999) 999-9999&lt;/p&gt;

&lt;!-- Taxpayer Identification Numbers --&gt;
&lt;label class="text-dark font-weight-medium"&gt;Taxpayer Identification Numbers&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-currency-usd" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" data-mask="99-9999999"&gt;
&lt;/div&gt;
&lt;p style="font-size: 90%"&gt;ex. 99-9999999&lt;/p&gt;

&lt;!-- Social Security Number --&gt;
&lt;label class="text-dark font-weight-medium"&gt;Social Security Number&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-server-security" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" data-mask="999-99-9999"&gt;
&lt;/div&gt;
&lt;p style="font-size: 90%"&gt;ex. 999-99-9999&lt;/p&gt;

&lt;!-- Eye Script --&gt;
&lt;label class="text-dark font-weight-medium"&gt;Eye Script&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-settings" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" data-mask="~9.99 ~9.99 999"&gt;
&lt;/div&gt;
&lt;p style="font-size: 90%"&gt;ex. ~9.99 ~9.99 999&lt;/p&gt;

&lt;!-- Credit Card Number --&gt;
&lt;label class="text-dark font-weight-medium"&gt;Credit Card Number&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-prepend"&gt;
    &lt;span class="input-group-text mdi mdi-credit-card" id="basic-addon1"&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" data-mask="9999 9999 9999 9999"&gt;
&lt;/div&gt;
&lt;p style="font-size: 90%"&gt;ex. 9999 9999 9999 9999&lt;/p&gt;
</code>
      </pre>
    </div>

    <div class="row">
      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium" for="">Date input</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-calendar" id="basic-addon1"></span>
            </div>
            <input type="text" class="form-control" data-mask="00/00/0000">
          </div>
          <p style="font-size: 90%">ex. 99/99/9999</p>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium">Phone input</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-phone" id="basic-addon1"></span>
            </div>
            <input type="text" class="form-control" data-mask="(999) 999-9999">
          </div>
          <p style="font-size: 90%">ex. (999) 999-9999</p>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium">Taxpayer Identification Numbers</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-currency-usd" id="basic-addon1"></span>
            </div>
            <input type="text" class="form-control" data-mask="99-9999999">
          </div>
          <p style="font-size: 90%">ex. 99-9999999</p>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium">Social Security Number</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-server-security" id="basic-addon1"></span>
            </div>
            <input type="text" class="form-control" data-mask="999-99-9999">
          </div>
          <p style="font-size: 90%">ex. 999-99-9999</p>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium">Eye Script</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-settings" id="basic-addon1"></span>
            </div>
            <input type="text" class="form-control" data-mask="~9.99 ~9.99 999">
          </div>
          <p style="font-size: 90%">ex. ~9.99 ~9.99 999</p>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium">Credit Card Number</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text mdi mdi-credit-card" id="basic-addon1"></span>
            </div>
            <input type="text" class="form-control" data-mask="9999 9999 9999 9999">
          </div>
          <p style="font-size: 90%">ex. 9999 9999 9999 9999</p>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a <span class="text-secondary text-capitalize"> Select 2 </span> component with a
      little customization that suits its design standards. For more information, please see the official <a
        class="font-weight-bold" href="https://select2.org/" target="_blank">Select 2 Documentaion.</a></p>
  </div>
</div>

<!-- Multiple Select -->
<div class="card card-default">
  <div class="card-header">
    <h2>Multiple Select</h2>

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-select-multiple" role="button"
      aria-expanded="false" aria-controls="collapse-select-multiple"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-select-multiple">
      <pre class="language-html mb-4">
<code >
&lt;!-- Multiple Select --&gt;
&lt;label class="text-dark font-weight-medium"&gt;Multiple Select&lt;/label&gt;
&lt;div class="form-group"&gt;
  &lt;select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple"&gt;
    &lt;option value="AL"&gt;Alabana&lt;/option&gt;
    &lt;option value="NY"&gt;New York&lt;/option&gt;
    &lt;option value="VR"&gt;Virginia&lt;/option&gt;
    &lt;option value="WA"&gt;Washington&lt;/option&gt;
    &lt;option value="CA"&gt;California&lt;/option&gt;
    &lt;option value="WY"&gt;Wyoming&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
</code>
      </pre>
    </div>

    <div>
      <label class="text-dark font-weight-medium">State</label>
      <div class="form-group">
        <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
          <option value="AL">Alabana</option>
          <option value="NY">New York</option>
          <option value="VR">Virginia</option>
          <option value="WA">Washington</option>
          <option value="CA">California</option>
          <option value="WY">Wyoming</option>
        </select>
      </div>
    </div>


  </div>
</div>

</div>
          
        </div>