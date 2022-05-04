@extends('layouts.app')

@section('content')

<body style="background-image: url('{{ asset('assets/images/bg.png') }}');">



    <div class="container">
        <div class="main">
				<br><br><br><br><br>
				<center><img src="{{ asset('assets/images/hotline.png') }}" alt="Hotline Numbers" width="800x" height="200px"></center>
				<br><br>
		<table class="hotline">
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/chairman.png') }}" alt="Office of the Chairman" id="hotlineP">
				<h3><b> Office of the Chairman </b></h3>
				<p class="hnumber"> 882-52-65</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/outpost.png') }}" alt="Palawan Outpost" id="hotlineP"> 
				<h3><b> Palawan Outpost </b></h3>
				<p class="hnumber"> 8713-08-49</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/barangay.png') }}" alt="Office of the Barangay Secretary" id="hotlineP">
				<h3><b> Office of the Barangay Secretary </b></h3>
				<p class="hnumber"> 8831-33-75</p>
				</div>
			</div>
			</td>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/center.png') }}" alt="Health Center" id="hotlineP">
				<h3><b> Health Center </b></h3>
				<p class="hnumber"> 8712-93-54</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<img src="{{ asset('assets/images/bantay bayan.png') }}" alt="Bantay Bayan" id="hotlineP">
				<h3><b> Bantay Bayan </b></h3>
				<p class="hnumber"> 8712-93-53</p>
				</div>
			</div>
			</td>
		</tr>
			<td id="center_calls" colspan="3">
			<br><br>
			<center><img src="{{ asset('assets/images/hhh.png') }}" alt="hotline" id="hotlineP"></center>
			</td>
		</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati City Hall Trunkline <br>(Connecting all departments/offices)</b></h3>
				<p class="hnumber"> 8870-1000</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati Command Control and Communication Center (C3)<br>(Emergency Rescue Operations) </b></h3>
				<p class="hnumber"> 168 / 8236-5790</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati Police Department </b></h3>
				<p class="hnumber"> 8887-1798 / <br> 0929-7936525</p>
				</div>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Bureau of Fire Protection </b></h3>
				<p class="hnumber"> 8818-5150 / <br> 8816-2553</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati Anti Drug Abuse Council </b></h3>
				<p class="hnumber"> 8870-1713 /<br> 8870-1715</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Ospital ng Makati </b></h3>
				<p class="hnumber"> 8882-6316 to 36</p>
				</div>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati Health Department </b></h3>
				<p class="hnumber"> 8870-1607 /<br> 8870-1605</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati Health Program <br>(Yellow Card Application) </b></h3>
				<p class="hnumber"> 8899-8930</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Veterinary Services Office </b></h3>
				<p class="hnumber"> 8889-7949</p>
				</div>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Public Safety Department </b></h3>
				<p class="hnumber"> 8819-3270</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati Action Center</b></h3>
				<p class="hnumber"> 8870-1436 /<br>8896-3443</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Department of Environmental Services </b></h3>
				<p class="hnumber"> 8899-9057</p>
				</div>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Public Employment Service Office </b></h3>
				<p class="hnumber"> 8870-1226 /<br>8870-1230</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makati Social Welfare Department</b></h3>
				<p class="hnumber"> 8870-1639</p>
				</div>
			</div>
			</td>
			<td>
			<div class="barangay">
				<div class="barangay_officials">
				<h3><b> Makatizen Card Office </b></h3>
				<p class="hnumber"> 8870-1090 /<br> 8870-1093</p>
				</div>
			</div>
			</td>
		</tr>
		</table>
		</div>
	</div>

@include('layouts.footer')

@endsection