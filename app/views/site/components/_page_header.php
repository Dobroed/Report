<!-- Page header
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="page-header">Page header</h1>
    </div>
    <p>A simple shell for an <code>h1</code> to appropriately space out and segment sections of content on a page. It can utilize the <code>h1</code>'s default <code>small</code> element, as well as most other components (with additional styles).</p>
    <div class="bs-example">
        <?= BSHtml::pageHeader('Example page header','Subtext for header') ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"page-header"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h1&gt;</span>Example page header <span class="nt">&lt;small&gt;</span>Subtext for header<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>