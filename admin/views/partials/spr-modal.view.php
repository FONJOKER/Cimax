<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap modal </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/modal/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="card card-default">
  <div class="card-header">
    <h2>modals</h2>

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-1" role="button"
      aria-expanded="false" aria-controls="collapse-list-group-1"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-list-group-1">
      <pre class="language-html mb-4">
<code >
&lt;!-- Default Modal -->
&lt;button type="button" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#exampleModal">
  Demo Modal
&lt;/button>

&lt;div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  &lt;div class="modal-dialog" role="document">
    &lt;div class="modal-content">
      &lt;div class="modal-header">
        &lt;h5 class="modal-title" id="exampleModalLabel">Modal Title&lt;/h5>
        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &lt;span aria-hidden="true">&times;&lt;/span>
        &lt;/button>
      &lt;/div>
      &lt;div class="modal-body">
        Modal body text goes here.
      &lt;/div>
      &lt;div class="modal-footer">
        &lt;button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close&lt;/button>
        &lt;button type="button" class="btn btn-primary btn-pill">Save Changes&lt;/button>
      &lt;/div>
    &lt;/div>
  &lt;/div>
&lt;/div>

&lt;!-- Scrolling Long Modal -->
&lt;button type="button" class="btn btn-success btn-pill" data-toggle="modal" data-target="#exampleModalLong">
  Demo Modal
&lt;/button>
&lt;div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
  aria-hidden="true">
  &lt;div class="modal-dialog" role="document">
    &lt;div class="modal-content">
      &lt;div class="modal-header">
        &lt;h5 class="modal-title" id="exampleModalLongTitle">Modal Title&lt;/h5>
        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &lt;span aria-hidden="true">&times;&lt;/span>
        &lt;/button>
      &lt;/div>
      &lt;div class="modal-body">
        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque
        nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum
        nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
        ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
        facilisis in,egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
        magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
        Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum.
        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
        rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit
        amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur
        ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
        vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
        magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras
        mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
        risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent
        commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
        fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl
        consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed
        consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla
        non metus auctor fringilla.
      &lt;/div>
      &lt;div class="modal-footer">
        &lt;button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close&lt;/button>
        &lt;button type="button" class="btn btn-primary btn-pill">Save Changes&lt;/button>
      &lt;/div>
    &lt;/div>
  &lt;/div>
&lt;/div>

&lt;!-- Tooltip Modal -->
&lt;button type="button" class="btn btn-warning btn-pill" data-toggle="modal" data-target="#exampleModalTooltip">
  Demo Modal
&lt;/button>

&lt;div class="modal fade" id="exampleModalTooltip" tabindex="-1" role="dialog" aria-labelledby="exampleModalTooltip"
  aria-hidden="true">
  &lt;div class="modal-dialog modal-dialog-centered" role="document">
    &lt;div class="modal-content">
      &lt;div class="modal-header">
        &lt;h5 class="modal-title" id="exampleModalLongTitle2">Modal Title&lt;/h5>
        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &lt;span aria-hidden="true">&times;&lt;/span>
        &lt;/button>
      &lt;/div>
      &lt;div class="modal-body">
        &lt;h5>Popover in a modal&lt;/h5>
        &lt;p>This
          &lt;a href="#" role="button" class="btn btn-secondary popover-test" data-toggle="popover" title="Popover title"
            data-content="Popover body content is set in this attribute.">button&lt;/a> triggers a popover on click.&lt;/p>
        &lt;hr>
        &lt;h5>Tooltips in a modal&lt;/h5>
        &lt;p>
          &lt;a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">This link&lt;/a> and
          &lt;a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">that link&lt;/a> have tooltips on hover.
        &lt;/p>
      &lt;/div>
      &lt;div class="modal-footer">
        &lt;button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close&lt;/button>
        &lt;button type="button" class="btn btn-primary btn-pill">Save Changes&lt;/button>
      &lt;/div>
    &lt;/div>
  &lt;/div>
&lt;/div>

&lt;!-- Using the Grid Modal -->
&lt;button type="button" class="btn btn-danger btn-pill" data-toggle="modal" data-target="#exampleModalGrid">
  Demo Modal
&lt;/button>

&lt;div class="modal fade" id="exampleModalGrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrid"
  aria-hidden="true">
  &lt;div class="modal-dialog modal-lg" role="document">
    &lt;div class="modal-content">
      &lt;div class="modal-header">
        &lt;h5 class="modal-title" id="exampleModalGridTitle">Modal Title&lt;/h5>
        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &lt;span aria-hidden="true">&times;&lt;/span>
        &lt;/button>
      &lt;/div>
      &lt;div class="modal-body">
        &lt;div class="modal-body">
          &lt;div class="container-fluid">
            &lt;div class="row">
              &lt;div class="col-md-4">.col-md-4&lt;/div>
              &lt;div class="col-md-4 ml-auto">.col-md-4 .ml-auto&lt;/div>
            &lt;/div>
            &lt;div class="row">
              &lt;div class="col-md-3 ml-auto">.col-md-3 .ml-auto&lt;/div>
              &lt;div class="col-md-2 ml-auto">.col-md-2 .ml-auto&lt;/div>
            &lt;/div>
            &lt;div class="row">
              &lt;div class="col-md-6 ml-auto">.col-md-6 .ml-auto&lt;/div>
            &lt;/div>
            &lt;div class="row">
              &lt;div class="col-sm-9">
                Level 1: .col-sm-9
                &lt;div class="row">
                  &lt;div class="col-8 col-sm-6">
                    Level 2: .col-8 .col-sm-6
                  &lt;/div>
                  &lt;div class="col-4 col-sm-6">
                    Level 2: .col-4 .col-sm-6
                  &lt;/div>
                &lt;/div>
              &lt;/div>
            &lt;/div>
          &lt;/div>
        &lt;/div>
      &lt;/div>
      &lt;div class="modal-footer">
        &lt;button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close&lt;/button>
        &lt;button type="button" class="btn btn-primary btn-pill">Save Changes&lt;/button>
      &lt;/div>
    &lt;/div>
  &lt;/div>
&lt;/div>

&lt;!-- Form Modal -->
&lt;button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#exampleModalForm">
  Demo Modal
&lt;/button>

&lt;div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
  aria-hidden="true">
  &lt;div class="modal-dialog" role="document">
    &lt;div class="modal-content">
      &lt;div class="modal-header">
        &lt;h5 class="modal-title" id="exampleModalFormTitle">Modal Title&lt;/h5>
        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &lt;span aria-hidden="true">&times;&lt;/span>
        &lt;/button>
      &lt;/div>
      &lt;div class="modal-body">
        &lt;form>
          &lt;div class="form-group">
            &lt;label for="exampleInputEmail1">Email address&lt;/label>
            &lt;input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email">
            &lt;small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.&lt;/small>
          &lt;/div>
          &lt;div class="form-group">
            &lt;label for="exampleInputPassword1">Password&lt;/label>
            &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          &lt;/div>
          &lt;div class="form-check pl-0">
            &lt;label class="control control-checkbox">Check me out
              &lt;input type="checkbox" checked="checked" />
              &lt;div class="control-indicator">&lt;/div>
            &lt;/label>
          &lt;/div>
          &lt;button type="submit" class="btn btn-primary">Submit&lt;/button>
        &lt;/form>
      &lt;/div>
      &lt;div class="modal-footer">
        &lt;button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close&lt;/button>
        &lt;button type="button" class="btn btn-primary btn-pill">Save Changes&lt;/button>
      &lt;/div>
    &lt;/div>
  &lt;/div>
&lt;/div>

&lt;!-- Small Modal -->
&lt;button type="button" class="btn bg-primary text-white btn-pill mb-3 mb-md-0" data-toggle="modal" data-target="#exampleModallarge">
  Large Modal
&lt;/button>

&lt;div class="modal fade" id="exampleModalsmall" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
  aria-hidden="true">
  &lt;div class="modal-dialog modal-sm" role="document">
    &lt;div class="modal-content">
      &lt;div class="modal-header">
        &lt;h5 class="modal-title" id="exampleModalSmallTitle">Modal Title&lt;/h5>
        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &lt;span aria-hidden="true">&times;&lt;/span>
        &lt;/button>
      &lt;/div>
      &lt;div class="modal-body">
        Modal body text goes here.
      &lt;/div>
      &lt;div class="modal-footer">
        &lt;button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close&lt;/button>
        &lt;button type="button" class="btn btn-primary btn-pill">Save Changes&lt;/button>
      &lt;/div>
    &lt;/div>
  &lt;/div>
&lt;/div>

</code>
        </pre>
    </div>

    <div class="row">
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Default Modal </h2>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#exampleModal">
              Demo Modal
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Scrolling Long Content</h2>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-success btn-pill" data-toggle="modal" data-target="#exampleModalLong">
              Demo Modal
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Tooltips and Popovers</h2>
          </div>
          <div class="card-body">

            <button type="button" class="btn btn-warning btn-pill" data-toggle="modal" data-target="#exampleModalTooltip">
              Demo Modal
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Using the Grid</h2>
          </div>
          <div class="card-body">

            <button type="button" class="btn btn-danger btn-pill" data-toggle="modal" data-target="#exampleModalGrid">
              Demo Modal
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Form Modal Content</h2>
          </div>
          <div class="card-body">

            <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#exampleModalForm">
              Demo Modal
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Optional Sizes</h2>
          </div>
          <div class="card-body">

            <button type="button" class="btn bg-primary text-white btn-pill mb-3 mb-xxl-0" data-toggle="modal"
              data-target="#exampleModallarge">
              Large Modal
            </button>
            <button type="button" class="btn bg-primary text-white btn-pill mb-3 mb-xxl-0" data-toggle="modal"
              data-target="#exampleModalsmall">
              Small Modal
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Modal body text goes here.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Long Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl
        consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed
        consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla
        non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
        in,egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna,
        vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean
        lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
        odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo
        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
        dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur
        et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet
        fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
        vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
        laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis
        consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
        consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
        lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
        cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
        Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
        risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur.
        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
        auctor fringilla.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Tooltip Modal -->
<div class="modal fade" id="exampleModalTooltip" tabindex="-1" role="dialog" aria-labelledby="exampleModalTooltip"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle2">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Popover in a modal</h5>
        <p>This
          <a href="#" role="button" class="btn btn-secondary popover-test" data-toggle="popover" title="Popover title"
            data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
        <hr>
        <h5>Tooltips in a modal</h5>
        <p>
          <a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">This link</a> and
          <a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Grid Modal -->
<div class="modal fade" id="exampleModalGrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrid"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalGridTitle">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">.col-md-4</div>
              <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
            </div>
            <div class="row">
              <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
              <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
            </div>
            <div class="row">
              <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
            </div>
            <div class="row">
              <div class="col-sm-9">
                Level 1: .col-sm-9
                <div class="row">
                  <div class="col-8 col-sm-6">
                    Level 2: .col-8 .col-sm-6
                  </div>
                  <div class="col-4 col-sm-6">
                    Level 2: .col-4 .col-sm-6
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Form Modal -->
<div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalFormTitle">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check pl-0">
            <label class="control control-checkbox">Check me out
              <input type="checkbox" checked="checked" />
              <div class="control-indicator"></div>
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Large Modal -->
<div class="modal fade" id="exampleModallarge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLarge">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Modal body text goes here.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Small Modal -->
<div class="modal fade" id="exampleModalsmall" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalSmallTitle">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Modal body text goes here.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
      </div>
    </div>
  </div>
</div>
</div>
          
        </div>