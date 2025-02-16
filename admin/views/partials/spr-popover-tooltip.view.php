<div class="content-wrapper">
          <div class="content">              <!-- For Components documentaion -->
              <div class="card card-default">
                <div class="px-6 py-4">
                  <p> Mono provides a variety of Bootstrap <span class="text-secondary text-capitalize"> popovers </span> and <span class="text-secondary text-capitalize"> tooltips </span> components with a little customization that suits its design standards. For more information, please see the official Bootstrap documentation for <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/popovers/" target="_blank"> Popovers </a> and <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/tooltips/" target="_blank"> Tooltips </p>
                </div>
              </div>

              <div class="row">
								<div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header">
                      <h2>Popover</h2>
                      <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-popover-1" role="button"
                        aria-expanded="false" aria-controls="collapse-popover-1"> </a>


                    </div>
                    <div class="card-body">
                      <div class="collapse" id="collapse-popover-1">
                        <pre class="language-html mb-4">
<code >
&lt;!-- Basic Popover --&gt;
&lt;button type="button" class="btn mb-1 btn-primary btn-pill" data-toggle="popover" title="Popover Title"
  data-content="Lorem ipsum dolor sit amet consectetur elit sed do."&gt;Launch popover&lt;/button&gt;

&lt;!-- Four Directions Popover --&gt;
&lt;button type="button" class="btn mb-1 btn-info btn-pill" data-container="body" data-toggle="popover"
  data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on top"&gt;Popover on top
&lt;/button&gt;

&lt;button type="button" class="btn mb-1 btn-warning btn-pill" data-container="body" data-toggle="popover"
  data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on right"&gt; Popover on right
&lt;/button&gt;

&lt;button type="button" class="btn mb-1 btn-danger btn-pill" data-container="body" data-toggle="popover"
  data-placement="bottom" data-content="Vivamus	sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on bottom"&gt;Popover on bottom
&lt;/button&gt;

&lt;button type="button" class="btn mb-1 btn-dark btn-pill" data-container="body" data-toggle="popover"
  data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on left"&gt; Popover on left
&lt;/button&gt;


&lt;!-- Dismiss on Next Click Popover --&gt;
&lt;a tabindex="0" class="btn btn-lg btn-success btn-pill" role="button" data-toggle="popover" data-trigger="focus"
  title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible
  popover&lt;/a&gt;

</code>
                        </pre>
                      </div>
                      <!-- Basic Popover -->
                      <div class="card card-default">
                        <div class="card-header">
                          <h4>Basic Popover</h4>
                        </div>
                        <div class="card-body">
                          <button type="button" class="btn mb-1 btn-primary btn-pill" data-toggle="popover" title="Popover Title"
                            data-content="Lorem ipsum dolor sit amet consectetur elit sed do.">Launch popover</button>
                        </div>
                      </div>

                      <div class="card card-default">
                        <div class="card-header">
                          <h4>Four Directions Popover</h4>
                        </div>
                        <div class="card-body">
                          <button type="button" class="btn mb-1 btn-info btn-pill mb-4" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on top">Popover on top
                          </button>

                          <button type="button" class="btn mb-1 btn-dark btn-pill mb-4" data-container="body" data-toggle="popover"
                            data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                            title="Popover on left">
                            Popover on left
                          </button>

                          <button type="button" class="btn mb-1 btn-danger btn-pill mb-4" data-container="body" data-toggle="popover"
                            data-placement="bottom" data-content="Vivamus	sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on bottom">
                            Popover on bottom
                          </button>

                          <button type="button" class="btn mb-1 btn-warning btn-pill mb-4" data-container="body" data-toggle="popover"
                            data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                            title="Popover on right">
                            Popover on right
                          </button>


                        </div>
                      </div>

                      <!-- Dismiss on Next Click Popover -->
                      <div class="card card-default">
                        <div class="card-header">
                          <h4>Dismiss on Next Click Popover</h4>
                        </div>
                        <div class="card-body">
                          <a tabindex="0" class="btn btn-lg btn-success btn-pill" role="button" data-toggle="popover" data-trigger="focus"
                            title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header">
                      <h2>Tooltip</h2>
                      <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-popover-2" role="button"
                        aria-expanded="false" aria-controls="collapse-popover-2"> </a>


                    </div>
                    <div class="card-body">
                      <div class="collapse" id="collapse-popover-2">
                        <pre class="language-html mb-4">
  <code >
&lt;!-- Basic Tooltip -->
&lt;button type="button" class="btn btn-primary btn-pill" data-toggle="tooltip" data-placement="right" title="Tooltip on top">
  Tooltip on top
&lt;/button>

&lt;!-- Four Directions Tooltip -->
&lt;button type="button" class="btn btn-primary btn-pill mb-4" data-toggle="tooltip" data-placement="top"  title="Tooltip on top">
  Tooltip on top
&lt;/button>
&lt;button type="button" class="btn btn-info btn-pill mb-4" data-toggle="tooltip" data-placement="left"  title="Tooltip on left">
  Tooltip on left
&lt;/button>
&lt;button type="button" class="btn btn-secondary btn-pill mb-4" data-toggle="tooltip" data-placement="bottom"  title="Tooltip on bottom">
  Tooltip on bottom
&lt;/button>
&lt;button type="button" class="btn btn-success btn-pill mb-4" data-toggle="tooltip" data-placement="right"  title="Tooltip on right">
  Tooltip on right
&lt;/button>

&lt;!-- Dismiss on Next Click Tooltip -->
&lt;span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Disabled tooltip">
  &lt;button class="btn btn-primary btn-pill btn-lg" style="pointer-events: none;" type="button" disabled>Disabled
    button&lt;/button>
&lt;/span>

  </code>
                        </pre>
                      </div>
                      <!-- Basic Tooltip -->
                      <div class="card card-default">
                        <div class="card-header">
                          <h4>Basic Tooltip</h4>
                        </div>
                        <div class="card-body">
                          <button type="button" class="btn btn-primary btn-pill" data-toggle="tooltip" data-placement="right" title="Tooltip on top">
                            Tooltip on top
                          </button>
                        </div>
                      </div>

                      <div class="card card-default">
                        <div class="card-header">
                          <h4>Four Directions Tooltip</h4>
                        </div>
                        <div class="card-body">
                          <button type="button" class="btn btn-primary btn-pill mb-4" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            Tooltip on top
                          </button>
                          <button type="button" class="btn btn-info btn-pill mb-4" data-toggle="tooltip" data-placement="left"
                            title="Tooltip on left">
                            Tooltip on left
                          </button>
                          <button type="button" class="btn btn-secondary btn-pill mb-4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                            Tooltip on bottom
                          </button>
                          <button type="button" class="btn btn-success btn-pill mb-4" data-toggle="tooltip" data-placement="right"
                            title="Tooltip on right">
                            Tooltip on right
                          </button>

                        </div>
                      </div>

                      <!-- Dismiss on Next Click Tooltip -->
                      <div class="card card-default">
                        <div class="card-header">
                          <h4>Dismiss on Next Click Tooltip</h4>
                        </div>
                        <div class="card-body">
                          <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Disabled tooltip">
                            <button class="btn btn-primary btn-pill btn-lg" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                          </span>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>

							</div>
</div>
          
        </div>