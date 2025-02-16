<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap Basic inputs </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/forms/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="row">
  <div class="col-xl-6">
    <!-- Basic Examples -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Basic Examples</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-basic-input" role="button"
          aria-expanded="false" aria-controls="collapse-basic-input"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-basic-input">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput1"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email"&gt;
    &lt;span class="mt-2 d-block"&gt;We'll never share your email with anyone else.&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlPassword"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control" id="exampleFormControlPassword" placeholder="Password"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlSelect12"&gt;Example select&lt;/label&gt;
    &lt;select class="form-control" id="exampleFormControlSelect12"&gt;
      &lt;option&gt;1&lt;/option&gt;
      &lt;option&gt;2&lt;/option&gt;
      &lt;option&gt;3&lt;/option&gt;
      &lt;option&gt;4&lt;/option&gt;
      &lt;option&gt;5&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControl2"&gt;Example multiple select&lt;/label&gt;
    &lt;select multiple class="form-control" id="exampleFormControl2"&gt;
      &lt;option&gt;1&lt;/option&gt;
      &lt;option&gt;2&lt;/option&gt;
      &lt;option&gt;3&lt;/option&gt;
      &lt;option&gt;4&lt;/option&gt;
      &lt;option&gt;5&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlTextarea1"&gt;Example textarea&lt;/label&gt;
    &lt;textarea class="form-control" id="exampleFormControlTextarea1" rows="3"&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlFile1"&gt;Example file input&lt;/label&gt;
    &lt;input type="file" class="form-control-file" id="exampleFormControlFile1"&gt;
  &lt;/div&gt;
  &lt;div class="form-footer mt-6"&gt;
    &lt;button type="submit" class="btn btn-primary btn-pill"&gt;Submit&lt;/button&gt;
    &lt;button type="submit" class="btn btn-light btn-pill"&gt;Cancel&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;

</code>
          </pre>
        </div>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput2">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter Email">
            <span class="mt-2 d-block">We'll never share your email with anyone else.</span>
          </div>
          <div class="form-group">
            <label for="exampleFormControlPassword">Password</label>
            <input type="password" class="form-control" id="exampleFormControlPassword" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect12">Example select</label>
            <select class="form-control" id="exampleFormControlSelect12">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControl2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControl2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-footer mt-6">
            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
            <button type="submit" class="btn btn-light btn-pill">Cancel</button>
          </div>
        </form>

      </div>
    </div>

    <!-- Custom Styles -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Custom Styles</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-custom-input" role="button"
          aria-expanded="false" aria-controls="collapse-custom-input"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-custom-input">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-sm-6"&gt;
      &lt;div class="form-group"&gt;
        &lt;label for="fname"&gt;First name&lt;/label&gt;
        &lt;input type="text" class="form-control" placeholder="John"&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6"&gt;
      &lt;div class="form-group"&gt;
        &lt;label for="lname"&gt;Last name&lt;/label&gt;
        &lt;input type="text" class="form-control" placeholder="Smith"&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6"&gt;
      &lt;div class="form-group"&gt;
        &lt;label for="city"&gt;City&lt;/label&gt;
        &lt;input type="text" class="form-control" placeholder="City Name"&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6"&gt;
      &lt;div class="row"&gt;
        &lt;div class="col-6"&gt;
          &lt;div class="form-group"&gt;
            &lt;label for="State"&gt;State&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="State"&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-6"&gt;
          &lt;div class="form-group"&gt;
            &lt;label for="Zip"&gt;Zip&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="Zip"&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-footer pt-5 border-top"&gt;
    &lt;button type="submit" class="btn btn-primary btn-pill"&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
</form>

</code>
          </pre>
        </div>
        <form>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="fname">First name</label>
                <input type="text" class="form-control" placeholder="John">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" placeholder="Smith">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" placeholder="City Name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="State">State</label>
                    <input type="text" class="form-control" placeholder="State">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="Zip">Zip</label>
                    <input type="text" class="form-control" placeholder="Zip">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-footer pt-5 border-top">
            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Inline Form -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Inline Form</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-inline-input" role="button"
          aria-expanded="false" aria-controls="collapse-inline-input"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-inline-input">
          <pre class="language-html mb-4">
<code >
&lt;form class="form-inline"&gt;
  &lt;label class="sr-only" for="inlineFormInputName2"&gt;Name&lt;/label&gt;
  &lt;input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe"&gt;
  &lt;label class="sr-only" for="inlineFormInputGroupUsername2"&gt;Username&lt;/label&gt;
  &lt;div class="input-group mb-2 mr-sm-2"&gt;
    &lt;div class="input-group-prepend"&gt;
      &lt;div class="input-group-text"&gt;@&lt;/div&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username"&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="btn btn-primary btn-pill mb-2"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
&lt;form&gt;
  &lt;p class="text-dark mb-4"&gt;Custom form controls and selects are also supported.&lt;/p&gt;
  &lt;label class="text-dark"&gt;Preference&lt;/label&gt;
  &lt;select class="custom-select my-1 mr-sm-2 w-auto" id="inlineFormCustomSelectPref"&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;label class="control control-checkbox d-inline-block"&gt;Remember my preference
    &lt;input type="checkbox" name="checkbox1" /&gt;
    &lt;div class="control-indicator"&gt;&lt;/div&gt;
  &lt;/label&gt;
  &lt;button type="submit" class="btn btn-primary btn-pill ml-2"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</code>
          </pre>
        </div>
        <p class="text-dark mb-3">Auto-sizing</p>
        <form class="form-inline">
          <label class="sr-only" for="inlineFormInputName2">Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
          <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
          </div>
          <button type="submit" class="btn btn-primary btn-pill mb-2">Submit</button>
        </form>
        <hr>
        <form>
          <p class="text-dark mb-4">Custom form controls and selects are also supported.</p>
          <label class="text-dark">Preference</label>
          <select class="custom-select my-1 mr-sm-2 w-auto" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label class="control control-checkbox d-inline-block">Remember my preference
            <input type="checkbox" name="checkbox1" />
            <div class="control-indicator"></div>
          </label>
          <button type="submit" class="btn btn-primary btn-pill ml-2">Submit</button>
        </form>
      </div>
    </div>

    <!-- Form Pill -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Form Pill</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-pill" role="button"
          aria-expanded="false" aria-controls="collapse-input-pill"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-input-pill">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput3"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control rounded-pill" id="exampleFormControlInput3" placeholder="Enter Email"&gt;
    &lt;span class="mt-2 d-block"&gt;We'll never share your email with anyone else.&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlPassword31"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control rounded-pill" id="exampleFormControlPassword31" placeholder="Password"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlSelect13"&gt;Example select&lt;/label&gt;
    &lt;select class="form-control rounded-pill" id="exampleFormControlSelect13"&gt;
      &lt;option&gt;1&lt;/option&gt;
      &lt;option&gt;2&lt;/option&gt;
      &lt;option&gt;3&lt;/option&gt;
      &lt;option&gt;4&lt;/option&gt;
      &lt;option&gt;5&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="form-footer mt-4"&gt;
    &lt;button type="submit" class="btn btn-primary btn-pill"&gt;Submit&lt;/button&gt;
    &lt;button type="submit" class="btn btn-light btn-pill"&gt;Cancel&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;

</code>
          </pre>
        </div>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput3">Email address</label>
            <input type="email" class="form-control rounded-pill" id="exampleFormControlInput3" placeholder="Enter Email">
            <span class="mt-2 d-block">We'll never share your email with anyone else.</span>
          </div>
          <div class="form-group">
            <label for="exampleFormControlPassword12">Password</label>
            <input type="password" class="form-control rounded-pill" id="exampleFormControlPassword12" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect13">Example select</label>
            <select class="form-control rounded-pill" id="exampleFormControlSelect13">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-footer mt-4">
            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
            <button type="submit" class="btn btn-light btn-pill">Cancel</button>
          </div>
        </form>
      </div>
    </div>



  </div>
  <div class="col-xl-6">
    <!-- Form Square -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Form Square</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-square" role="button"
          aria-expanded="false" aria-controls="collapse-input-square"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-input-square">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput4"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control rounded-0" id="exampleFormControlInput4" placeholder="Enter Email"&gt;
    &lt;span class="mt-2 d-block"&gt;We'll never share your email with anyone else.&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlPasswor3"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control rounded-0" id="exampleFormControlPasswor3" placeholder="Password"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlSelect14"&gt;Example select&lt;/label&gt;
    &lt;select class="form-control rounded-0" id="exampleFormControlSelect14"&gt;
      &lt;option&gt;1&lt;/option&gt;
      &lt;option&gt;2&lt;/option&gt;
      &lt;option&gt;3&lt;/option&gt;
      &lt;option&gt;4&lt;/option&gt;
      &lt;option&gt;5&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="form-footer"&gt;
    &lt;button type="submit" class="btn btn-secondary btn-pill"&gt;Submit&lt;/button&gt;
    &lt;button type="submit" class="btn btn-light btn-pill"&gt;Cancel&lt;/button&gt;
  &lt;/div&gt;

&lt;/form&gt;

</code>
          </pre>
        </div>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput44">Email address</label>
            <input type="email" class="form-control rounded-0" id="exampleFormControlInput4" placeholder="Enter Email">
            <span class="mt-2 d-block">We'll never share your email with anyone else.</span>
          </div>
          <div class="form-group">
            <label for="exampleFormControlPasswor3">Password</label>
            <input type="password" class="form-control rounded-0" id="exampleFormControlPasswor3" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect14">Example select</label>
            <select class="form-control rounded-0" id="exampleFormControlSelect14">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-secondary btn-pill">Submit</button>
            <button type="submit" class="btn btn-light btn-pill">Cancel</button>
          </div>

        </form>

      </div>
    </div>

    <!-- Solid Style Input -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Solid Style Input</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-light-bg" role="button"
          aria-expanded="false" aria-controls="collapse-input-light-bg"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-input-light-bg">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput5"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control rounded-0 bg-light" id="exampleFormControlInput5" placeholder="Enter Email"&gt;
    &lt;span class="mt-2 d-block"&gt;We'll never share your email with anyone else.&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlPassword4"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control rounded-0 bg-light" id="exampleFormControlPassword4"
      placeholder="Password"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlSelect15"&gt;Example select&lt;/label&gt;
    &lt;select class="form-control rounded-0 bg-light" id="exampleFormControlSelect15"&gt;
      &lt;option&gt;1&lt;/option&gt;
      &lt;option&gt;2&lt;/option&gt;
      &lt;option&gt;3&lt;/option&gt;
      &lt;option&gt;4&lt;/option&gt;
      &lt;option&gt;5&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="form-footer"&gt;
    &lt;button type="submit" class="btn btn-secondary btn-pill"&gt;Submit&lt;/button&gt;
    &lt;button type="submit" class="btn btn-light btn-pill"&gt;Cancel&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;

</code>
          </pre>
        </div>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput5">Email address</label>
            <input type="email" class="form-control rounded-0 bg-light" id="exampleFormControlInput5" placeholder="Enter Email">
            <span class="mt-2 d-block">We'll never share your email with anyone else.</span>
          </div>
          <div class="form-group">
            <label for="exampleFormControlPassword4">Password</label>
            <input type="password" class="form-control rounded-0 bg-light" id="exampleFormControlPassword4" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect16">Example select</label>
            <select class="form-control rounded-0 bg-light" id="exampleFormControlSelect16">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-secondary btn-pill">Submit</button>
            <button type="submit" class="btn btn-light btn-pill">Cancel</button>
          </div>
        </form>

      </div>
    </div>

    <!-- Disabled Form -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Disabled Form</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-disabled" role="button"
          aria-expanded="false" aria-controls="collapse-input-disabled"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-input-disabled">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;fieldset disabled&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="disabledTextInput"&gt;Disabled input&lt;/label&gt;
      &lt;input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="disabledSelect"&gt;Disabled select menu&lt;/label&gt;
      &lt;select id="disabledSelect" class="form-control"&gt;
        &lt;option&gt;Disabled select&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled&gt;
        &lt;label class="form-check-label" for="disabledFieldsetCheck"&gt;
          Can't check this
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;

</code>
          </pre>
        </div>
        <form>
          <fieldset disabled>
            <div class="form-group">
              <label for="disabledTextInput">Disabled input</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="form-group">
              <label for="disabledSelect">Disabled select menu</label>
              <select id="disabledSelect" class="form-control">
                <option>Disabled select</option>
              </select>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                <label class="form-check-label" for="disabledFieldsetCheck">
                  Can't check this
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </fieldset>
        </form>

      </div>
    </div>

    <!-- Form Sizing -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Form Sizing</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-sizing" role="button"
          aria-expanded="false" aria-controls="collapse-input-sizing"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-input-sizing">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput6"&gt;Large input&lt;/label&gt;
    &lt;input class="form-control form-control-lg" type="text" placeholder="Large input"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput7"&gt;Default input&lt;/label&gt;
    &lt;input class="form-control" type="text" placeholder="Default input"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput8"&gt;Small input&lt;/label&gt;
    &lt;input class="form-control form-control-sm" type="text" placeholder="Small input"&gt;
  &lt;/div&gt;
&lt;/form&gt;

</code>
          </pre>
        </div>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput6">Large input</label>
            <input class="form-control form-control-lg" type="text" placeholder="Large input">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput7">Default input</label>
            <input class="form-control" type="text" placeholder="Default input">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput8">Small input</label>
            <input class="form-control form-control-sm" type="text" placeholder="Small input">
          </div>
        </form>

      </div>
    </div>

    <!-- Column Sizing -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Column Sizing</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-colum-sizing" role="button"
          aria-expanded="false" aria-controls="collapse-colum-sizing"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-colum-sizing">
          <pre class="language-html mb-4">
<code >
&lt;form&gt;
  &lt;div class="form-row"&gt;
    &lt;div class="col-6"&gt;
      &lt;input type="text" class="form-control" placeholder="col-6"&gt;
    &lt;/div&gt;
    &lt;div class="col-3"&gt;
      &lt;input type="text" class="form-control" placeholder="col-3"&gt;
    &lt;/div&gt;
    &lt;div class="col-3"&gt;
      &lt;input type="text" class="form-control" placeholder="col-3"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;

</code>
          </pre>
        </div>
        <form>
          <div class="form-row">
            <div class="col-6">
              <input type="text" class="form-control" placeholder="col-6">
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="col-3">
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="col-3">
            </div>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>

</div>
          
        </div>