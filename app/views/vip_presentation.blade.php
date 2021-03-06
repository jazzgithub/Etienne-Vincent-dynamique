@extends ( 'vip_template' )

@include ( 'menu_principal' )

@section( 'content' )
<div class="vip">
	<h2>Etienne Vincent Quartet</h2>
	<h3></h3>
	<figure class="presentation">
		<img 
			src="{{ URL::to( 'media/images/presentation_etiennevincentquartet.jpg' ) }}" 
			alt="Etienne Vincent - Guitariste" 
			title="Etienne Vincent - Guitariste" />
		<p>
			Nouveau projet du guitariste Etienne Vincent, adepte d’une musique vivante, 
			m&eacute;lodique et nuanc&eacute;e. Privil&eacute;giant l'&eacute;coute et le dialogue, 
			le quartet joue une musique de l’instant, o&ugrave; les influences du guitariste 
			(Peter Bernstein, John Abercrombie...) se fondent dans un univers tr&egrave;s personnel.
		</p>
	</figure>
	
	<figure class="audio">
		<figcaption>In The Wind - The Lake - Extraits de l'EP Courants</figcaption>
		<audio controls>
			<source src="{{ URL::to( 'media/musique/inTheWind.ogg' ) }}" type="audio/ogg">
			<source src="{{ URL::to( 'media/musique/inTheWind.mp3' ) }}" type="audio/mpeg">
			<!-- voir avec JQuery pour plus d'option -->
			<!-- Your browser does not support the audio element. -->
		</audio>
		<audio controls>
			<source src="{{ URL::to( 'media/musique/theLake.ogg' ) }}" type="audio/ogg">
			<source src="{{ URL::to( 'media/musique/theLake.mp3' ) }}" type="audio/mpeg">
			<!-- voir avec JQuery pour plus d'option -->
			<!-- Your browser does not support the audio element. -->
		</audio>
		<audio controls>
			<source src="{{ URL::to( 'media/musique/courants_extraits.ogg' ) }}" type="audio/ogg">
			<source src="{{ URL::to( 'media/musique/courants_extraits.mp3' ) }}" type="audio/mpeg">
			<!-- voir avec JQuery pour plus d'option -->
			<!-- Your browser does not support the audio element. -->
		</audio>
	</figure>
</div>
@stop