<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap checkboxes and radios </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/forms/#checkboxes-and-radios" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="row">
  <div class="col-xl-6">
    <!-- Basic Checkbox -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Basic Checkbox</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-basic-input-group" role="button"
          aria-expanded="false" aria-controls="collapse-basic-input-group"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-basic-input-group">
          <pre class="language-html mb-4">
<code >
&lt;div class="form-check d-inline-block mr-3 mb-3"&gt;
  &lt;input class="form-check-input" type="checkbox" checked="checked" value="" id="defaultCheck1"&gt;
  &lt;label class="form-check-label" for="defaultCheck1"&gt;
    First Checkbox
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check d-inline-block mr-3 mb-3"&gt;
  &lt;input class="form-check-input" type="checkbox" value="" id="defaultCheck2"&gt;
  &lt;label class="form-check-label" for="defaultCheck2"&gt;
    Second Checkbox
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check d-inline-block mr-3 mb-3"&gt;
  &lt;input class="form-check-input" type="checkbox" value="" id="disableCheck1" disabled&gt;
  &lt;label class="form-check-label" for="disableCheck1"&gt;
    Disabled
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check d-inline-block mr-3 mb-3"&gt;
  &lt;input class="form-check-input" type="checkbox" checked="checked" value="" id="disableCheck2" disabled&gt;
  &lt;label class="form-check-label" for="disableCheck2"&gt;
    Disabled checkbox
  &lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="form-check d-inline-block mr-3 mb-3">
          <input class="form-check-input" type="checkbox" checked="checked" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            First Checkbox
          </label>
        </div>

        <div class="form-check d-inline-block mr-3 mb-3">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
          <label class="form-check-label" for="defaultCheck2">
            Second Checkbox
          </label>
        </div>

        <div class="form-check d-inline-block mr-3 mb-3">
          <input class="form-check-input" type="checkbox" value="" id="disableCheck1" disabled>
          <label class="form-check-label" for="disableCheck1">
            Disabled
          </label>
        </div>

        <div class="form-check d-inline-block mr-3 mb-3">
          <input class="form-check-input" type="checkbox" checked="checked" value="" id="disableCheck2" disabled>
          <label class="form-check-label" for="disableCheck2">
            Disabled checkbox
          </label>
        </div>

      </div>
    </div>

    <!-- Custom Checkbox -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Custom Checkbox</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-custom-checkbox" role="button"
          aria-expanded="false" aria-controls="collapse-custom-checkbox"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-custom-checkbox">
          <pre class="language-html mb-4">
<code >
&lt;div class="custom-control custom-checkbox d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheck1" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheck1"&gt;First Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheck2"&gt;
  &lt;label class="custom-control-label" for="customCheck2"&gt;Second Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled&gt;
  &lt;label class="custom-control-label" for="customCheckDisabled1"&gt;Disabled&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" checked="checked" id="customCheckDisabled1" disabled&gt;
  &lt;label class="custom-control-label" for="customCheckDisabled1"&gt;Disabled Checked&lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheck1" checked="checked" >
          <label class="custom-control-label" for="customCheck1">First Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheck2">
          <label class="custom-control-label" for="customCheck2">Second Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled>
          <label class="custom-control-label" for="customCheckDisabled1">Disabled</label>
        </div>

        <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" checked="checked" id="customCheckDisabled1" disabled>
          <label class="custom-control-label" for="customCheckDisabled1">Disabled Checked</label>
        </div>

      </div>
    </div>

    <!-- Solid Checkbox -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Solid Checkbox</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-solid-checkbox" role="button"
          aria-expanded="false" aria-controls="collapse-solid-checkbox"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-solid-checkbox">
          <pre class="language-html mb-4">
<code >
&lt;div class="custom-control custom-checkbox d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckPrimary" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckPrimary"&gt;default Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-secondary d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckSecondary" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckSecondary"&gt;Secondary Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-success d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckSuccess" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckSuccess"&gt;Success Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-danger d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckDanger" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckDanger"&gt;Danger Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-warning d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckWarning" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckWarning"&gt;Warning Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-info d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckInfo" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckInfo"&gt;Info Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-light d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckLight" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckLight"&gt;Light Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-dark d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="customCheckDark" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customCheckDark"&gt;Dark Checkbox&lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="custom-control custom-checkbox d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckPrimary" checked="checked">
          <label class="custom-control-label" for="customCheckPrimary">default Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-secondary d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckSecondary" checked="checked">
          <label class="custom-control-label" for="customCheckSecondary">Secondary Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-success d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckSuccess" checked="checked">
          <label class="custom-control-label" for="customCheckSuccess">Success Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-danger d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckDanger" checked="checked">
          <label class="custom-control-label" for="customCheckDanger">Danger Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-warning d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckWarning" checked="checked">
          <label class="custom-control-label" for="customCheckWarning">Warning Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-info d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckInfo" checked="checked">
          <label class="custom-control-label" for="customCheckInfo">Info Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-light d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckLight" checked="checked">
          <label class="custom-control-label" for="customCheckLight">Light Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-dark d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheckDark" checked="checked">
          <label class="custom-control-label" for="customCheckDark">Dark Checkbox</label>
        </div>

      </div>
    </div>

    <!-- Outline Checkbox -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Outline Checkbox</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-outline-chekbox" role="button"
          aria-expanded="false" aria-controls="collapse-outline-chekbox"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-outline-chekbox">
          <pre class="language-html mb-4">
<code >
&lt;div class="custom-control custom-checkbox checkbox-outline-primary d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-primary" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-primary"&gt;default Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-outline-secondary d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-secondary" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-secondary"&gt;Secondary Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-outline-success d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-success" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-success"&gt;Success Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-outline-danger d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-danger" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-danger"&gt;Danger Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-outline-warning d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-warning" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-warning"&gt;Warning Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-outline-info d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-info" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-info"&gt;Info Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-outline-light d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-light" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-light"&gt;Light Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-checkbox checkbox-outline-dark d-inline-block mr-3 mb-3"&gt;
  &lt;input type="checkbox" class="custom-control-input" id="outline-chekbox-dark" checked="checked"&gt;
  &lt;label class="custom-control-label" for="outline-chekbox-dark"&gt;Dark Checkbox&lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-primary d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-primary" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-primary">default Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-secondary d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-secondary" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-secondary">Secondary Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-success d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-success" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-success">Success Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-danger d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-danger" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-danger">Danger Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-warning d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-warning" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-warning">Warning Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-info d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-info" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-info">Info Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-light d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-light" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-light">Light Checkbox</label>
        </div>

        <div class="custom-control custom-checkbox checkbox-outline-dark d-inline-block mr-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="outline-chekbox-dark" checked="checked">
          <label class="custom-control-label" for="outline-chekbox-dark">Dark Checkbox</label>
        </div>

      </div>
    </div>




  </div>
  <div class="col-xl-6">
    <!-- Basic Radios -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Basic Radios</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-radio-check-box" role="button"
          aria-expanded="false" aria-controls="collapse-radio-check-box"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-radio-check-box">
          <pre class="language-html mb-4">
<code >
&lt;div class="form-check mr-3 mb-3 d-inline-block"&gt;
  &lt;input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked&gt;
  &lt;label class="form-check-label" for="exampleRadios1"&gt;
    Default radio
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check mr-3 mb-3 d-inline-block"&gt;
  &lt;input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"&gt;
  &lt;label class="form-check-label" for="exampleRadios2"&gt;
    Second radio
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check mr-3 mb-3 d-inline-block"&gt;
  &lt;input class="form-check-input" type="radio" name="exampleRadiosd" id="exampleRadios3" value="option3" disabled&gt;
  &lt;label class="form-check-label" for="exampleRadios3"&gt;
    Disabled
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check mr-3 mb-3 d-inline-block"&gt;
  &lt;input class="form-check-input" type="radio" name="exampleRadiosd" id="exampleRadios3" value="option3" checked
    disabled&gt;
  &lt;label class="form-check-label" for="exampleRadios3"&gt;
    Disabled Checked
  &lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="form-check mr-3 mb-3 d-inline-block">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Default radio
          </label>
        </div>

        <div class="form-check mr-3 mb-3 d-inline-block">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Second radio
          </label>
        </div>

        <div class="form-check mr-3 mb-3 d-inline-block">
          <input class="form-check-input" type="radio" name="exampleRadiosd" id="exampleRadios3" value="option3" disabled>
          <label class="form-check-label" for="exampleRadios3">
            Disabled
          </label>
        </div>

        <div class="form-check mr-3 mb-3 d-inline-block">
          <input class="form-check-input" type="radio" name="exampleRadiosd" id="exampleRadios3" value="option3" checked disabled>
          <label class="form-check-label" for="exampleRadios3">
            Disabled Checked
          </label>
        </div>

      </div>
    </div>

    <!-- Custom Radios -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Custom Radios</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-custom-radio" role="button"
          aria-expanded="false" aria-controls="collapse-custom-radio"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-custom-radio">
          <pre class="language-html mb-4">
<code >
&lt;div class="custom-control custom-radio d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="checked"&gt;
  &lt;label class="custom-control-label" for="customRadio1"&gt;First Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"&gt;
  &lt;label class="custom-control-label" for="customRadio2"&gt;Second Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="customRadio2" name="customRadios" class="custom-control-input" disabled&gt;
  &lt;label class="custom-control-label" for="customRadio2"&gt;Disabled&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="customRadio1" name="customRadios" class="custom-control-input" checked="checked" disabled&gt;
  &lt;label class="custom-control-label" for="customRadio1"&gt;Disabled&lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="checked">
          <label class="custom-control-label" for="customRadio1">First Radio</label>
        </div>

        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
          <label class="custom-control-label" for="customRadio2">Second Radio</label>
        </div>

        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
          <input type="radio" id="customRadio2" name="customRadios" class="custom-control-input" disabled>
          <label class="custom-control-label" for="customRadio2">Disabled</label>
        </div>

        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
          <input type="radio" id="customRadio1" name="customRadios" class="custom-control-input" checked="checked" disabled>
          <label class="custom-control-label" for="customRadio1">Disabled</label>
        </div>

      </div>
    </div>

    <!-- Solid Radios -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Solid Radios</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-solid-radio" role="button"
          aria-expanded="false" aria-controls="collapse-solid-radio"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-solid-radio">
          <pre class="language-html mb-4">
<code >
&lt;div class="custom-control custom-radio d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-primary" name="radio-primary" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-primary"&gt;Default Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-secondary d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-secondary" name="radio-secondary" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-secondary"&gt;Secondary Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-success d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-success" name="radio-success" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-success"&gt;Success Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-danger d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-danger" name="radio-danger" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-danger"&gt;Danger Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-info d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-info" name="radio-info" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-info"&gt;Info Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-light d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-light" name="radio-light" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-light"&gt;Light Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-dark d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-dark" name="radio-dark" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-dark"&gt;Dark Radio&lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-primary" name="radio-primary" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-primary">Default Radio</label>
        </div>

        <div class="custom-control custom-radio radio-secondary d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-secondary" name="radio-secondary" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-secondary">Secondary Radio</label>
        </div>

        <div class="custom-control custom-radio radio-success d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-success" name="radio-success" class="custom-control-input"  checked>
          <label class="custom-control-label" for="radio-success">Success Radio</label>
        </div>

        <div class="custom-control custom-radio radio-danger d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-danger" name="radio-danger" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-danger">Danger Radio</label>
        </div>

        <div class="custom-control custom-radio radio-info d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-info" name="radio-info" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-info">Info Radio</label>
        </div>

        <div class="custom-control custom-radio radio-light d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-light" name="radio-light" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-light">Light Radio</label>
        </div>

        <div class="custom-control custom-radio radio-dark d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-dark" name="radio-dark" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-dark">Dark Radio</label>
        </div>

      </div>
    </div>

    <!-- Outline Radio -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Outline Radio</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-radio-outline" role="button"
          aria-expanded="false" aria-controls="collapse-radio-outline"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-radio-outline">
          <pre class="language-html mb-4">
<code >
&lt;div class="custom-control custom-radio radio-outline-primary d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-outline-primary" name="radio-outline-primary" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-outline-primary"&gt;Default Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-outline-secondary d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-outline-secondary" name="radio-outline-secondary" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-outline-secondary"&gt;Secondary Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-outline-success d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-outline-success" name="radio-outline-success" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-outline-success"&gt;Success Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-outline-danger d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-outline-danger" name="radio-outline-danger" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-outline-danger"&gt;Danger Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-outline-info d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-outline-info" name="radio-outline-info" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-outline-info"&gt;Info Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-outline-light d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-outline-light" name="radio-outline-light" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-outline-light"&gt;Light Radio&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio radio-outline-dark d-inline-block mr-3 mb-3"&gt;
  &lt;input type="radio" id="radio-outline-dark" name="radio-outline-dark" class="custom-control-input" checked&gt;
  &lt;label class="custom-control-label" for="radio-outline-dark"&gt;Dark Radio&lt;/label&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="custom-control custom-radio radio-outline-primary d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-outline-primary" name="radio-outline-primary" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-outline-primary">Default Radio</label>
        </div>

        <div class="custom-control custom-radio radio-outline-secondary d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-outline-secondary" name="radio-outline-secondary" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-outline-secondary">Secondary Radio</label>
        </div>

        <div class="custom-control custom-radio radio-outline-success d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-outline-success" name="radio-outline-success" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-outline-success">Success Radio</label>
        </div>

        <div class="custom-control custom-radio radio-outline-danger d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-outline-danger" name="radio-outline-danger" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-outline-danger">Danger Radio</label>
        </div>

        <div class="custom-control custom-radio radio-outline-info d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-outline-info" name="radio-outline-info" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-outline-info">Info Radio</label>
        </div>

        <div class="custom-control custom-radio radio-outline-light d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-outline-light" name="radio-outline-light" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-outline-light">Light Radio</label>
        </div>

        <div class="custom-control custom-radio radio-outline-dark d-inline-block mr-3 mb-3">
          <input type="radio" id="radio-outline-dark" name="radio-outline-dark" class="custom-control-input" checked>
          <label class="custom-control-label" for="radio-outline-dark">Dark Radio</label>
        </div>

      </div>
    </div>


  </div>
</div>
</div>
          
        </div>