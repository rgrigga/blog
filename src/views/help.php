<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
		@import url(//fonts.googleapis.com/css?family=Ubuntu:500);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			/*text-align:center;*/

		}

		h1{
			color:rgba(63,134,6,1);
			/*green*/
		}
		h2{
			color:rgba(113,158,171,1);
			/*blue*/
		}
		h3{
			color:rgba(180,156,0,1);
			/*gold*/
		}


		.welcome {
			width: 50%;
			height: 50%;
			position: relative;
			left: 10%;
			top: 10%;
			/*margin-left: -150px;*/
			/*margin-top: -100px;*/
			padding-bottom: 50px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	
		pre,code{
			font-family:'Ubuntu', sans-serif;
			background-color: rgba(47,9,35,1);
			color:white;
		}
		pre{
			padding:20px;
		}

	</style>
</head>
<body>




	<div class="welcome">
		<h1>How to set up a new site:</h1>

	<h2>Install Laravel</h2>
<pre><code>composer create-project laravel/laravel mysite --prefer-dist</code></pre>
<h1>OR</h1>

<pre>laravel new mysite</pre>
<p>(assuming you did <a href="http://laravel.com/docs/installation">this</a>: <code>mv ~/Downloads/laravel.phar /usr/bin/laravel</code>)</p>

<h2>.gitignore:</h2>
<pre><code>	/bootstrap/compiled.php
	/vendor
	/system
	/output
	composer.phar
	composer.lock
	.DS_Store
	Thumbs.db

	.idea/
	.idea
	.idea/workspace.xml
	workspace.xml

	sftp-config.json
</code></pre>

<h2>Configure local server for "av2.dev":</h2>
<h3>Prepare .conf file</h3>
<pre>    cd /etc/apache2/sites-available
    sudo cp ag.dev.conf av2.dev.conf
    sudo nano av2.dev.conf
</pre>

(make changes to 2 folders and 1 hostname)

<h3>Publish local site</h3>
<pre>    sudo a2ensite av2.dev
    sudo service apache2 reload
    sudo nano /etc/hosts
</pre>

(add line for av2.dev)
<h3>chmod the storage folder</h3>
<pre>    sudo chmod -R 777 ~/viviosoft/av2/storage
</pre>
If all above goes well, the browser should respond to http://ag.dev

<h2>Version Control</h2>
<p>SSH has been configured for git, bitbucket, sublime text, and phpstorm</p>

<h1>STOP</h1>
<h2>You <strong>could</strong> just:</h2>
<pre>git init</pre>
<h2>But better yet, you could...</h2>
<p>If you do most of your work in the workspace, you can publish your workspace as a package.  So, try this:</p>
<h3>Package in 3 steps:</h3>
<p>1. Put your name and email in <code>app/config/workbench</code></p>
<p>2. Now run:</p>
<pre><code>	php artisan workbench vendor/package --resources</code></pre>
<p>Config, Controllers, Models, Views, Tests, Migrations, Seeds, and Routes, as well as 'public' resources, (Basically EVERYTHING you do)  can simply go here.  This way, you can publish it as a package.  </p>
<p>3. edit <code>app/config/app.php</code>.  Add something like this:</p>
<pre><code>	'Rgrigga\Blog\BlogServiceProvider',</code></pre>
<p>to the ServiceProviders array.</p>
<!-- <p>4. Run <code>php artisan dump-autoload</code></p> -->
<p>4. now you can run <code>git init</code> from within this package.  For example:</p>
<pre><code>	cd ~/blog/workbench/rgrigga/blog
	git init
	git add remote origin git@github.com:rgrigga/blog
	git push origin master
</code></pre>
	</div>
	<div class="sidebar">
		<h1 id="names-versioning">Names & Versioning</h1>
		<a href="https://packagist.org/about">All About Naming Conventions</a>
		<h2 id="naming">Naming Conventions</h2>
		<h2 id="versioning"><a href="http://semver.org/">Versioning</a></h2>
		<blockquote>In the world of software management there exists a dread place called "dependency hell." The bigger your system grows and the more packages you integrate into your software, the more likely you are to find yourself, one day, in this pit of despair. <small><a href="http://semver.org/">semver.org</a></small></blockquote>
		<p>from Packagist</p>
		<h3 id="hooks">Github Hooks</h3>
		<blockquote>It is highly recommended to set up the GitHub service hook for all your packages. This reduces the load on our side, and ensures your package is updated almost instantly. To do so you can go to your GitHub repository, click the "Admin" button, then "Service Hooks". Pick "Packagist" in the list, and add the API key you will find on your profile, plus your Packagist username if it is not the same as on GitHub. Check the "Active" box and submit the form. <small><a href="https://packagist.org/about"></a></small></blockquote>
		<h1>Unit Testing</h1>
		<p><a href="http://phpunit.de/manual/3.7/en/textui.html">php Unit Commands</a></p>
	</div>
	<footer>
		<h1>That's it!</h1>
	</footer>
</body>
</html>
