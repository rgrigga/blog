@extends('blog::templates.scaffold')

@section('main')
<h1>Videos</h1>
<h2>Video 1</h2>
<video id="video1" class="video-js vjs-default-skin"
  controls preload="auto" width="800" height="600"
  poster="/img/thinker.png"
  data-setup='{"example_option":true}'>
 <source src="/videos/hello.ogv" type='video/ogg' />
</video>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, maiores, culpa, sint voluptatibus voluptatem esse nemo sed soluta ea perferendis ipsa fugiat tempora nihil rem facere autem aliquam explicabo aspernatur?</p>
<article>
	<h2>Video 2:</h2>
<video id="video2" class="video-js vjs-default-skin"
  controls preload="auto" width="800" height="600"
  poster="/img/thinker.png"
  data-setup='{"example_option":true}'>
 <source src="/videos/hello-1.ogv" type='video/ogg' />
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis rem iusto quo suscipit quia doloremque eum expedita. Doloribus, saepe, consequatur, perspiciatis, inventore est illum dolor maxime debitis eligendi beatae libero.</p>
</video>
</article>
<article>
	<h2>Video 3:</h2>
<video id="video3" class="video-js vjs-default-skin"
  controls preload="auto" width="800" height="600"
  poster="/img/thinker.png"
  data-setup='{"example_option":true}'>
 <source src="/videos/hello-1.ogv" type='video/ogg' />
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis rem iusto quo suscipit quia doloremque eum expedita. Doloribus, saepe, consequatur, perspiciatis, inventore est illum dolor maxime debitis eligendi beatae libero.</p>
</video>
</article>

@stop