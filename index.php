<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>

<!-- Header -->
<header class="container">
	<hgroup>
		<h1>Welcome!</h1>
		<p>This is the configuration page for my web app setup template.</p>
	</hgroup>
</header>

<main class="container">
	<!-- Article-->
	<article id="article">
		<h3>Currently loaded config:</h3>
		<ul>
			<li>Color Scheme: <?php echo $config['themeColor']?></li>
		</ul>
		<footer>
		  <small>Made with PicoCSS</small>
		</footer>
	</article>
	
      <!-- Buttons-->
      <section id="buttons">
        <h2>Buttons</h2>
        <p class="grid">
          <button>Primary</button>
          <button class="secondary">Secondary</button>
          <button class="contrast">Contrast</button>
        </p>
        <p class="grid">
          <button class="outline">Primary outline</button>
          <button class="outline secondary">Secondary outline</button>
          <button class="outline contrast">Contrast outline</button>
        </p>
      </section>
      <!-- ./ Buttons -->

</main>



<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>