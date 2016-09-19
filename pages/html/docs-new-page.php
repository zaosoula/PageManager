<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>Learn how to create a new page in PageManager</h1>
                        <a href="#getting" class="btn btn-outline btn-xl page-scroll">Let's go</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="device-container">
                    <div class="device-mockup macbook_2016 portrait white">
                        <div class="device">
                            <div class="screen">
                                <i class="fa fa-file-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="getting" class="getting features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Create a new page</h2>
                    <p class="text-muted">Learn how to create a new page in PageManager</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>After, <a href="<?echo BaseUrl?>/docs/install">the installation of PageManager</a>, go to <code>pages/php/</code> and create a file with the name of your choice like <code>exemple.php</code> then go to <code>pages/html/</code> and create
                    a file with the same name.</p>
                <ul class="list-unstyled">
                    <li><code>pages/php/<i>exemple.php</i></code> file contains your page logics (PHP)</li>
                    <li><code>pages/html/<i>exemple.php</i></code> file contains your page content and design (HTML/CSS) </li>
                </ul>
                <p>Now, open <code>pages/php/<i>exemple.php</i></code>, define the title, resources and required blocks :
                </p>

                <pre class="prettyprint linenums">
&lt;?
  $Page = new Page(array(
    'title'=&gt;'Exemple - My Project',
    'require'=&gt; array('header','footer'),
    'assets'=&gt;array(
        'js/exemple.js',
        'css/exemple.css'
  )));
?&gt;
</pre><br/>
                <ul class="list-unstyled">
                    <li>
                        Use class <code>Page</code> to define :
                        <ul class="ul-unstyled">
                            <li><code>'title'=&gt;'<i>Exemple - My Project</i>'</code> The page title used in the <code>&lt;title&gt;</code> tag</li>
                            <li><code>'require'=&gt; array('header','footer'),</code> Page blocks define as an array. If not defined, takes the default value</li>
                            <li><code>'assets'=&gt;array('js/exemple.js','css/exemple.css')</code> Page assets define as an array. All assets are loaded at the end of the page. It can only load CSS & JS files.</li>
                        </ul>
                    </li>
                </ul>
                <hr/><br>
                <p>Congratulations, you have created your first page, just add content.
            </div>
        </div>
</section>
