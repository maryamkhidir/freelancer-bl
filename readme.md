<h1>Getting started</h1>
<h2>Installation</h2>
<p>Please check the official laravel installation guide for server requirements before you start. Official Documentation</p>

<h3>Clone the repository</h3>

<pre>git clone git@github.com:maryamkhidir/freelancer-bl.git</pre>
<h3>Switch to the repo folder</h3>

<pre>cd freelancer-bl</pre>
<h3>Install all the dependencies using composer</h3>

<pre>composer install</pre>
<h3>Environment configurations</h3>

<p>Copy the example env file and make the required configuration changes in the .env file</p>

<pre>cp .env.example .env</pre>
<h3>Generate a new application key</h3>

<pre>php artisan key:generate</pre>
<h3>Database migrations</h3>
<p>Run the database migrations (Set the database connection in .env before migrating)</p>

<pre>php artisan migrate</pre>
<p>Start the local development server</p>

<pre>php artisan serve</pre>
<p>You can now access the server at http://localhost:8000</p>

<h2>How to thank me</h2>
<li>Star this repository and create a project with it :)</li>

<h2>How to contact me</h2>
<p>Email: <i>maryamolaide95@gmail.com</i> or on twitter: <i>@browwnn_sugar</i></p>
