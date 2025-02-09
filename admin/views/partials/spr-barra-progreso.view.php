<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap progress </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/progress/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>

<div class="row">
  <div class="col-xl-6">
    <!-- Basic Progress Bar -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Basic Progress Bar</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-progress-1" role="button"
          aria-expanded="false" aria-controls="collapse-progress-1"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-progress-1">
          <pre class="language-html mb-4">
<code >
&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

</code>
          </pre>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>

      </div>
    </div>

    <!-- Striped Progress -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Striped Progress</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-progress-2" role="button"
          aria-expanded="false" aria-controls="collapse-progress-2"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-progress-2">
          <pre class="language-html mb-4">
<code >
&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>

      </div>
    </div>

    <!-- Multiple Progress -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Multiple Progress</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-progress-3" role="button"
          aria-expanded="false" aria-controls="collapse-progress-3"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-progress-3">
          <pre class="language-html mb-4">
<code >
&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
  &lt;div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
  &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
  &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
  &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
    aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
            aria-valuemax="100"></div>
          <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>

      </div>
    </div>



  </div>
  <div class="col-xl-6">
    <!-- Progress Bar with Label -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Progress Bar with Label</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-progress-4" role="button"
          aria-expanded="false" aria-controls="collapse-progress-4"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-progress-4">
          <pre class="language-html mb-4">
<code >

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
    aria-valuemax="100"&gt;25%&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
    aria-valuemax="100"&gt;50%&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
    aria-valuemax="100"&gt;75%&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress"&gt;
  &lt;div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
    aria-valuemax="100"&gt;100%&lt;/div&gt;
&lt;/div&gt;

</code>
          </pre>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0"
            aria-valuemax="100">5%</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">25%</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
            aria-valuemax="100">50%</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
            aria-valuemax="100">75%</div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
            aria-valuemax="100">100%</div>
        </div>

      </div>
    </div>

    <!-- Animated Progress -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Animated Progress</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-progress-5" role="button"
          aria-expanded="false" aria-controls="collapse-progress-5"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-progress-5">
          <pre class="language-html mb-4">
<code >
&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%"
    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 50%"
    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%"
    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 100%"
    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15%"
            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 25%"
            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 50%"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%"
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 100%"
            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

      </div>
    </div>

    <!-- Progress Sizes -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Progress Sizes</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-progress-6" role="button"
          aria-expanded="false" aria-controls="collapse-progress-6"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-progress-6">
          <pre class="language-html mb-4">
<code >
&lt;div class="progress mb-3"&gt;
  &lt;div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3" style="height:12px"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3" style="height:10px"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3" style="height:8px"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress mb-3" style="height:5px"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
    aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="progress mb-3">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3" style="height:12px">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3 progress-md">
          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3" style="height:8px">
          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress progress-sm mb-3">
          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

      </div>
    </div>

  </div>
</div>
</div>
          
        </div>