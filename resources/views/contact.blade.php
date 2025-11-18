@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')

	<div id="page">
		<div id="body" class="contact">
			<div class="header">
				<div>
					<h1>PIŠI NAM</h1>
				</div>
			</div>

			<div class="footer">
				<div class="contact">
					<h1>KONTAKT FORMA</h1>
					<form action="index.html">
						<input type="text" name="Name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Email" value="Email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
						<textarea name="meassage" cols="50" rows="7">Share your thoughts</textarea>
						<input type="submit" value="Send" id="submit">
					</form>
				</div>
				<div class="section">
					<h1>IMAŠ PITANJE ILI IDEJU?</h1>
					<p>Javi nam se ako imaš prijedlog, pitanje o receptima ili želiš surađivati s nama.  
						Tu smo da odgovorimo na sve što te zanima!</p>  <br><br>
						<p>📧 jogurterija@gmail.com  <br>
						📍 Vrbovec, Hrvatska</p>
				</div>
				<div class="contact">
					<h1>NAŠA LOKACIJA</h1>
				</div>
				<div class="map-container">
					<iframe 
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.053362962473!2d16.413698!3d45.883191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765b14861a6c9df%3A0x97f831fbb90dbcef!2sVrbovec!5e0!3m2!1shr!2shr!4v1694444400000" 
						width="100%" 
						height="300" 
						style="border:0;" 
						allowfullscreen="" 
						loading="lazy" 
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
			</div>	
		</div>
	</div>

	
@endsection
