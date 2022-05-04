@extends('layouts.app')

@section('content')

    <body style="background-image: url('{{ asset('assets/images/bg.png')}}');">

    <div class="container">
        <div class="main">
				<br><br><br><br><br>
				<img src="{{ asset('assets/images/officials.png') }}" alt="Barangay Pitogo Officials" id="blogo">
				<br><br>
		<table class="officials">
			<tr>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o2.jpg') }}" alt="Barangay Chairman" id="chairman">
				<h3><b> Ives M. Ebrada </b></h3>
				<p class="position"> Barangay Chairman </p>
				</div>
			</div>
			</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o3.jpg') }}" alt="Barangay Kagawad" id="kagawad">
				<h3><b> Kgd. Emmanuel R. Alfon </b></h3>
				<p class="position"> Committee on Health, Sanitation and Anti-Drugs</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o4.jpg') }}" alt="Barangay Kagawad" id="kagawad">
				<h3><b> Kgd. Leonel V. Rivera </b></h3>
				<p class="position"> Committee on Environmental Protection & DRRM</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o5.jpg') }}" alt="Barangay Kagawad" id="kagawad">
				<h3><b> Kgd. Jayson Q. Montallana </b></h3>
				<p class="position"> Committee on Culture, Arts, Tourism and Education Services</p>
				</div>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o6.jpg') }}" alt="Barangay Kagawad" id="kagawad">
				<h3><b> Kgd. Bernildo M. Guzman </b></h3>
				<p class="position"> Committee on Budget and Finance</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o7.jpg') }}" alt="Barangay Kagawad" id="kagawad">
				<h3><b> Kgd. Joselito E. Mendoza </b></h3>
				<p class="position"> Committee on Health, Sanitation and Anti-Drugs</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src ="{{ asset('assets/images/o8.jpg') }}" alt="Barangay Kagawad" id="kagawad">
				<h3><b> Kgd. Norlito A. Garcia </b></h3>
				<p class="position"> Committee on Public Order, Safety and Human Rights</p>
				</div>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o9.jpg') }}" alt="Barangay Kagawad" id="kagawad">
				<h3><b> Jerry P. Panerio </b></h3>
				<p class="position"> Committee on Youth & Sports <br> SK Chairman</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o10.jpg') }}" alt="Barangay Treasurer" id="kagawad">
				<h3><b> Edgardo E. Catbagan </b></h3>
				<p class="position"> Barangay Treasurer</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/o11.jpg') }}" alt="Barangay Secretary" id="kagawad"> 
				<h3><b> Erwin C. Macandog </b></h3>
				<p class="position"> Barangay Secretary</p>
				</div>
			</div>
			</td>
			</tr>
		</table>
	</div>
	</div>
		<div class="container2">
        <div class="main">
			<img src="{{ asset('assets/images/skpitogo.png') }}" alt="Barangay Pitogo Officials" id="blogo">
			<br>
		<table class="officials">
			<tr>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/a.jpg') }}" alt="SK Chairman" id="chairman"> 
					<h3><b> Jerry P. Panerio Jr</b></h3>
					<p class="position"> SK Chairman</p>
					</div>
				</div>
			</tr>
			<tr>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/b.jpg') }}" alt="SK Kagawad" id="kagawad"> 
					<h3><b> Andhrea T. Atienza </b></h3>
					<p class="position"> SK Kagawad</p>
					</div>
				</div>
				</td>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/c.jpg') }}" alt="SK Kagawad" id="kagawad"> 
					<h3><b> Pamela Denise R. Ruiz </b></h3>
					<p class="position"> SK Kagawad</p>
					</div>
				</div>
				</td>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/d.jpg') }}" alt="SK Kagawad" id="kagawad"> 
					<h3><b> Jandel C. Prado </b></h3>
					<p class="position"> SK Kagawad</p>
					</div>
				</div>
				</td>
			</tr>
			<tr>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/e.jpg') }}" alt="SK Kagawad" id="kagawad"> 
					<h3><b> Nydorf P. Cordero </b></h3>
					<p class="position"> SK Kagawad</p>
					</div>
				</div>
				</td>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/f.jpg') }}" alt="SK Kagawad" id="kagawad"> 
					<h3><b> Alyanna E. Vallejos </b></h3>
					<p class="position"> SK Kagawad</p>
					</div>
				</div>
				</td>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/g.jpg') }}" alt="SK Kagawad" id="kagawad"> 
					<h3><b> Cassandra Mae S. Velasco </b></h3>
					<p class="position"> SK Kagawad</p>
					</div>
				</div>
				</td>
			</tr>
			<tr>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/h.jpg') }}" alt="SK Kagawad" id="kagawad"> 
					<h3><b> Emerick John T. Sajota </b></h3>
					<p class="position"> SK Kagawad</p>
					</div>
				</div>
				</td>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/i.jpg') }}" alt="SK Secretary" id="kagawad"> 
					<h3><b> Julius Fondales </b></h3>
					<p class="position"> SK Secretary</p>
					</div>
				</div>
				</td>
				<td>
				<div class="barangay">
					<div class="barangay_officials">
					<img src="{{ asset('assets/images/i.jpg') }}" alt="SK Treasurer" id="kagawad"> 
					<h3><b> Arnie L. Perlas </b></h3>
					<p class="position"> SK Treasurer</p>
					</div>
				</div>
				</td>
			</tr>
			</tr>
		</table>
		</div>
	</div>

    @include('layouts.footer')

@endsection