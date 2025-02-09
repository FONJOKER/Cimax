<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Bootstrap list group </span> components with a
      little customization that suits its design standards. For more information, please see the official <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.3/components/list-group/" target="_blank"> Bootstrap documentation.</a></p>
  </div>
</div>


<div class="row">
  <div class="col-xl-6">
    <!-- List Items -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Items</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-1" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-1"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-1">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;
</code>
        </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
    </div>

    <!-- Disabled List -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Disabled List</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-2" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-2"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-2">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item disabled" aria-disabled="true"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;
</code>
          </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

      </div>
    </div>

    <!-- List Item Links -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Item Links</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-3" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-3"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-3">
          <pre class="language-html mb-4">
<code >
&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action active"&gt;Cras justo odio&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Morbi leo risus&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a>
          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at            eros</a>
        </div>

      </div>
    </div>

    <!-- Contextual Classes -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Contextual Classes</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-4" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-4"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-4">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-primary"&gt;A simple primary list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-secondary"&gt;A simple secondary list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-success"&gt;A simple success list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-danger"&gt;A simple danger list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-warning"&gt;A simple warning list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-info"&gt;A simple info list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-light"&gt;A simple light list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-dark"&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;
</code>
          </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
          <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
          <li class="list-group-item list-group-item-success">A simple success list group item</li>
          <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
          <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
          <li class="list-group-item list-group-item-info">A simple info list group item</li>
          <li class="list-group-item list-group-item-light">A simple light list group item</li>
          <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
        </ul>

      </div>
    </div>

    <!-- List Group With Avatars -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Group With Avatars</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-5" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-5"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-5">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-01.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;The stars are twinkling.&lt;/span&gt;
        &lt;p&gt;Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months
          do things on
          at.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-02.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;This is a Japanese doll.&lt;/span&gt;
        &lt;p&gt;Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye
          consisted so.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-03.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;Support Ticket&lt;/span&gt;
        &lt;p&gt;Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only.
          Music
          leave say doors him.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-04.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;New Order&lt;/span&gt;
        &lt;p&gt;Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened
          oh
          produced prospect formerly up am.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</code>
          </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-01.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">The stars are twinkling.</span>
                <p>Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on
                at.</p>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-02.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">This is a Japanese doll.</span>
                <p>Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye consisted so.</p>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-03.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">Support Ticket</span>
                <p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only. Music
                leave say doors him.</p>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-04.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">New Order</span>
                <p>Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh
                produced prospect formerly up am.</p>
              </div>
            </div>
          </li>

        </ul>

      </div>
    </div>

    <!-- List Group With Icons -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Group With Icons</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-6" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-6"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-6">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper bg-primary"&gt;
        &lt;i class="mdi mdi-star-outline"&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;The stars are twinkling.&lt;/span&gt;
        &lt;p&gt;Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months
          do things
          on at.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper bg-success"&gt;
        &lt;i class="mdi mdi-pencil"&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;This is a Japanese doll.&lt;/span&gt;
        &lt;p&gt;Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye
          consisted so.
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper bg-danger"&gt;
        &lt;i class="mdi mdi-square-edit-outline"&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;Support Ticket&lt;/span&gt;
        &lt;p&gt;Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only.
          Music
          leave say doors him.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper bg-info"&gt;
        &lt;i class="mdi mdi-diamond-outline"&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;New Order&lt;/span&gt;
        &lt;p&gt;Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened
          oh
          produced prospect formerly up am.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</code>
          </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper bg-primary">
                <i class="mdi mdi-star-outline"></i>
              </div>
              <div class="media-body">
                <span class="title">The stars are twinkling.</span>
                <p>Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things
                  on  at.</p>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper bg-success">
                <i class="mdi mdi-pencil"></i>
              </div>
              <div class="media-body">
                <span class="title">This is a Japanese doll.</span>
                <p>Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye consisted so.
                </p>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper bg-danger">
                <i class="mdi mdi-square-edit-outline"></i>
              </div>
              <div class="media-body">
                <span class="title">Support Ticket</span>
                <p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only. Music
                  leave say doors him.</p>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper bg-info">
                <i class="mdi mdi-diamond-outline"></i>
              </div>
              <div class="media-body">
                <span class="title">New Order</span>
                <p>Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh
                  produced prospect formerly up am.</p>
              </div>
            </div>
          </li>

        </ul>

      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <!-- List Item Active -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Item Active</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-7" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-7"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-7">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item active"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;
</code>
          </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item active">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

      </div>
    </div>

    <!-- List with Badges -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List with Badges</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-8" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-8"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-8">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Cras justo odio
    &lt;span class="badge badge-primary badge-pill"&gt;14&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Dapibus ac facilisis in
    &lt;span class="badge badge-primary badge-pill"&gt;2&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Morbi leo risus
    &lt;span class="badge badge-primary badge-pill"&gt;1&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Lorem, ipsum dolor
    &lt;span class="badge badge-primary badge-pill"&gt;10&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Sit amet consectetur
    &lt;span class="badge badge-primary badge-pill"&gt;3&lt;/span&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</code>
          </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Morbi leo risus
            <span class="badge badge-primary badge-pill">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Lorem, ipsum dolor
            <span class="badge badge-primary badge-pill">10</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Sit amet consectetur
            <span class="badge badge-primary badge-pill">3</span>
          </li>
        </ul>

      </div>
    </div>

    <!-- List Item Buttons -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Item Buttons</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-9" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-9"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-9">
          <pre class="language-html mb-4">
<code >
&lt;div class="list-group"&gt;
  &lt;button type="button" class="list-group-item list-group-item-action active"&gt;Cras justo odio&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Morbi leo risus&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Porta ac consectetur ac&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action" disabled&gt;Vestibulum at eros&lt;/button&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="list-group">
          <button type="button" class="list-group-item list-group-item-action active">Cras justo odio</button>
          <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
          <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
          <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
          <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
        </div>

      </div>
    </div>

    <!-- List Group with Control -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Group with Control</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-10" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-10"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-10">
          <pre class="language-html mb-4">
<code >
&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-01.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;The stars are twinkling.&lt;/span&gt;
        &lt;p&gt;Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly
          months do things on
          at.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="custom-control custom-checkbox align-self-center"&gt;
        &lt;input type="checkbox" class="custom-control-input" id="customCheck1"&gt;
        &lt;label class="custom-control-label" for="customCheck1"&gt;&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-02.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;This is a Japanese doll.&lt;/span&gt;
        &lt;p&gt;Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye
          consisted so.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="custom-control custom-checkbox align-self-center"&gt;
        &lt;input type="checkbox" class="custom-control-input" id="customCheck2"&gt;
        &lt;label class="custom-control-label" for="customCheck2"&gt;&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-03.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;Support Ticket&lt;/span&gt;
        &lt;p&gt;Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof
          only. Music
          leave say doors him.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="custom-control custom-checkbox align-self-center"&gt;
        &lt;input type="checkbox" class="custom-control-input" id="customCheck3"&gt;
        &lt;label class="custom-control-label" for="customCheck3"&gt;&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item list-group-item-action"&gt;
    &lt;div class="media media-sm mb-0"&gt;
      &lt;div class="media-sm-wrapper"&gt;
        &lt;img src="images/user/user-sm-04.jpg" alt="User Image"&gt;
      &lt;/div&gt;
      &lt;div class="media-body"&gt;
        &lt;span class="title"&gt;New Order&lt;/span&gt;
        &lt;p&gt;Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As
          hastened oh
          produced prospect formerly up am.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="custom-control custom-checkbox align-self-center"&gt;
        &lt;input type="checkbox" class="custom-control-input" id="customCheck4"&gt;
        &lt;label class="custom-control-label" for="customCheck4"&gt;&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;

</code>
          </pre>
        </div>

        <ul class="list-group">
          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-01.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">The stars are twinkling.</span>
                <p>Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly
                  months do things on
                  at.</p>
              </div>
              <div class="custom-control custom-checkbox align-self-center">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1"></label>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-02.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">This is a Japanese doll.</span>
                <p>Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye
                  consisted so.</p>
              </div>
              <div class="custom-control custom-checkbox align-self-center">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2"></label>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-03.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">Support Ticket</span>
                <p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof
                  only. Music
                  leave say doors him.</p>
              </div>
              <div class="custom-control custom-checkbox align-self-center">
                <input type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3"></label>
              </div>
            </div>
          </li>

          <li class="list-group-item list-group-item-action">
            <div class="media media-sm mb-0">
              <div class="media-sm-wrapper">
                <img src="images/user/user-sm-04.jpg" alt="User Image">
              </div>
              <div class="media-body">
                <span class="title">New Order</span>
                <p>Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As
                  hastened oh
                  produced prospect formerly up am.</p>
              </div>
              <div class="custom-control custom-checkbox align-self-center">
                <input type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4"></label>
              </div>
            </div>
          </li>

        </ul>

      </div>
    </div>

    <!-- List Group with Control -->
    <div class="card card-default">
      <div class="card-header">
        <h2>List Group with Control</h2>

        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-list-group-11" role="button"
          aria-expanded="false" aria-controls="collapse-list-group-11"> </a>


      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-list-group-11">
          <pre class="language-html mb-4">
<code >
&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action active"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1 text-white"&gt;List group item heading&lt;/h5&gt;
      &lt;small&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1 text-white"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
      blandit.&lt;/p&gt;
    &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class="text-muted"&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class="text-muted"&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;
</code>
          </pre>
        </div>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1 text-white">List group item heading</h5>
              <small>3 days ago</small>
            </div>
            <p class="mb-1 text-white">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
        </div>

      </div>
    </div>

  </div>

</div>
</div>
          
        </div>