<!-- Modal
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="modals">Modals <small>modal.js</small></h1>
</div>

<h2 id="modals-examples">Examples</h2>
<p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>

<div class="bs-callout bs-callout-warning" id="callout-stacked-modals">
    <h4>Overlapping modals not supported</h4>
    <p>Be sure not to open a modal while another is still visible. Showing more than one modal at a time requires custom code.</p>
</div>
<div class="bs-callout bs-callout-warning">
    <h4>Mobile device caveats</h4>
    <p>There are some caveats regarding using modals on mobile devices. <a href="../getting-started#mobile-modals">See our browser support docs</a> for details.</p>
</div>

<h3>Static example</h3>
<p>A rendered modal with header, body, and set of actions in the footer.</p>
<div class="bs-example bs-example-modal">
    <?php $this->widget('bootstrap.widgets.BsModal', array(
        'id' => 'myModal',
        'header' => 'Modal Heading',
        'content' => '<p>One fine body...</p>',
        'footer' => array(
            BSHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => BSHtml::BUTTON_COLOR_PRIMARY)),
            BSHtml::button('Close', array('data-dismiss' => 'modal')),
        ),
    )); ?>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h4&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>One fine body<span class="ni">&amp;hellip;</span><span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal-content --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal-dialog --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal --&gt;</span>
        </code></pre></div>

<h3>Live demo</h3>
<p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
            </div>
            <div class="modal-body">
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

                <h4>Popover in a modal</h4>
                <p>This <a href="#" role="button" class="btn btn-default popover-test" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href="#" class="tooltip-test" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

                <hr>

                <h4>Overflowing text to show scroll behavior</h4>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="bs-example" style="padding-bottom: 24px;">
    <?php echo BSHtml::ajaxButton(
        'BSHtml::ajaxButton',
        Yii::app()->createAbsoluteUrl('site/ajaxTest'),
        array(
            'cache' => true,
            'data' => array(
                'message' => 'clicked the AjaxButton'
            ),
            'type' => 'POST',
            'success' => 'js:function(data){
                    console.log(data);
                    $(".modal-body").html(data);
                    $("#demo_modal").modal("show");
                }',
        ),
        array(
            'color' => BSHtml::BUTTON_COLOR_INFO,
            'icon' => BSHtml::GLYPHICON_BELL
        )
    ); ?>
    <?php echo BSHtml::ajaxLink('BSHtml::ajaxLink',
        Yii::app()->createAbsoluteUrl('site/ajaxTest'),
        array(
            'cache' => true,
            'data' => array(
                'message' => 'clicked the AjaxLink'
            ),
            'type' => 'POST',
            'success' => 'js:function(data){
                    console.log(data);
                    $(".modal-body").html(data);
                    $("#demo_modal").modal("show");
                }',
        ),
        array(
            'icon' => BSHtml::GLYPHICON_BELL
        )
    ); ?>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Button trigger modal --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#myModal"</span><span class="nt">&gt;</span>
            Launch demo modal
            <span class="nt">&lt;/button&gt;</span>

            <span class="c">&lt;!-- Modal --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"myModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"myModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"myModalLabel"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h4&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal-content --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal-dialog --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.modal --&gt;</span>
        </code></pre></div>


<div class="bs-callout bs-callout-warning">
    <h4>Make modals accessible</h4>
    <p>Be sure to add <code>role="dialog"</code> to <code>.modal</code>, <code>aria-labelledby="myModalLabel"</code> attribute to reference the modal title, and <code>aria-hidden="true"</code> to tell assistive technologies to skip the modal's DOM elements.</p>
    <p>Additionally, you may give a description of your modal dialog with <code>aria-describedby</code> on <code>.modal</code>.</p>
</div>

<h2 id="modals-usage">Usage</h2>
<p>The modal plugin toggles your hidden content on demand, via data attributes or JavaScript. It also adds <code>.model-open</code> to the <code>&lt;body&gt;</code> to override default scrolling behavior and generates a <code>.modal-backdrop</code> to provide a click area for dismissing shown modals when clicking outside the modal.</p>

<h3>Via data attributes</h3>
<p>Activate a modal without writing JavaScript. Set <code>data-toggle="modal"</code> on a controller element, like a button, along with a <code>data-target="#foo"</code> or <code>href="#foo"</code> to target a specific modal to toggle.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#myModal"</span><span class="nt">&gt;</span>Launch modal<span class="nt">&lt;/button&gt;</span>
        </code></pre></div>

<h3>Via JavaScript</h3>
<p>Call a modal with id <code>myModal</code> with a single line of JavaScript:</p>
<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="nx">options</span><span class="p">)</span>
        </code></pre></div>

<h3>Options</h3>
<p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-backdrop=""</code>.</p>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th style="width: 100px;">Name</th>
            <th style="width: 50px;">type</th>
            <th style="width: 50px;">default</th>
            <th>description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>backdrop</td>
            <td>boolean or the string <code>'static'</code></td>
            <td>true</td>
            <td>Includes a modal-backdrop element. Alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>
        </tr>
        <tr>
            <td>keyboard</td>
            <td>boolean</td>
            <td>true</td>
            <td>Closes the modal when escape key is pressed</td>
        </tr>
        <tr>
            <td>show</td>
            <td>boolean</td>
            <td>true</td>
            <td>Shows the modal when initialized.</td>
        </tr>
        <tr>
            <td>remote</td>
            <td>path</td>
            <td>false</td>
            <td><p>If a remote URL is provided, content will be loaded via jQuery's <code>load</code> method and injected into the root of the modal element. If you're using the data-api, you may alternatively use the <code>href</code> attribute to specify the remote source. An example of this is shown below:</p>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">href=</span><span class="s">"remote.html"</span> <span class="na">data-target=</span><span class="s">"#modal"</span><span class="nt">&gt;</span>Click me<span class="nt">&lt;/a&gt;</span>
                        </code></pre></div>
            </td>
        </tr>
        </tbody>
    </table>
</div><!-- /.table-responsive -->

<h3>Methods</h3>

<h4>.modal(options)</h4>
<p>Activates your content as a modal. Accepts an optional options <code>object</code>.</p>
<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">({</span>
            <span class="nx">keyboard</span><span class="o">:</span> <span class="kc">false</span>
            <span class="p">})</span>
        </code></pre></div>

<h4>.modal('toggle')</h4>
<p>Manually toggles a modal.</p>
<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="s1">'toggle'</span><span class="p">)</span>
        </code></pre></div>

<h4>.modal('show')</h4>
<p>Manually opens a modal.</p>
<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span>
        </code></pre></div>

<h4>.modal('hide')</h4>
<p>Manually hides a modal.</p>
<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="s1">'hide'</span><span class="p">)</span>
        </code></pre></div>

<h3>Events</h3>
<p>Bootstrap's modal class exposes a few events for hooking into modal functionality.</p>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th style="width: 150px;">Event Type</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>show.bs.modal</td>
            <td>This event fires immediately when the <code>show</code> instance method is called.</td>
        </tr>
        <tr>
            <td>shown.bs.modal</td>
            <td>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete).</td>
        </tr>
        <tr>
            <td>hide.bs.modal</td>
            <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
        </tr>
        <tr>
            <td>hidden.bs.modal</td>
            <td>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete).</td>
        </tr>
        </tbody>
    </table>
</div><!-- /.table-responsive -->
<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'hidden.bs.modal'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
            <span class="c1">// do something…</span>
            <span class="p">})</span>
        </code></pre></div>
</div>