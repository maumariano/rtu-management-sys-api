@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="main">
			<div class="center__m">
				<table class="privacy">
				<tr>
					<h2 class="priv_h2"> Terms of Use </h2>
				</tr>
				<tr>
					<h3 class="priv_h3"> Privacy Policy </h3>
					<p class="priv"> The Barangay Pitogo works toward protecting the privacy of the users of its Web Portal. We have carefully 
					crafted this privacy policy to define how we collect, use, disclose, transfer, protect, and store your information.
					Please take a moment to familiarize yourself with our privacy practices and <a href="{{ route('hotline') }}" target="_blank">
					contact us </a> if you have any questions.</p>
				</tr>
				<tr>
					<h3 class="priv_h3"> Information Collected and Stored Automatically </h3>
					<p class="priv"> Personal information is data that can be used to uniquely identify or contact a single person. Where personal 
					information is required to use or interact with our Web Portal, it is our policy that this information is private 
					and confidential unless expressed otherwise. The personal information you provide to us is stored in a secure location, 
					accessible only by authorized personnel, and is used only for the purposes for which you provided it. We may also combine it with 
					other information to provide and improve our online content and services.</p>
				</tr>
				<tr>
					<h3 class="priv_h3"> What personal information we collect </h3>
					<p class="priv">The only personal information that we collect is what you decide to give us by signing up and availing our services. 
					If you choose to provide us with personal information — like filling out a Contact Us form and submitting it to us through the website — 
					to help get you the information you requested. Similarly, when you sign up for an account with us; we will collect your name, address, 
					email address, birthdate, age, and mobile number.</p>
				</tr>
				<tr>
					<h3 class="priv_h3"> How we use your personal information </h3>
					<p class="priv">
						<ul class="priv_ul">
						<li> The personal information we collect allows us to improve our services and content. </li>
						<li>We also use your personal information to help us develop and deliver better services and content.</li>
						<li>From time to time, we may use your personal information to send important notices, such as communications about the Barangay.</li>
						<li>We may also use personal information for internal purposes such as data analysis and research to improve services and customer communications.</li>
						</ul>
					</p>
				</tr>
				<tr>
					<h3 class="priv_h3"> Collection and use of Non-Personal information </h3>
					<p class="priv">We may collect information such as IP address, timestamp, and location where our Web Portal is accessed so that we can better understand 
					customer behavior and improve the features we provide.</p>
				</tr>
				<tr>
					<h3 class="priv_h3"> Cookies and other technologies </h3>
					<p class="priv">Like most websites, our Web Portal uses "cookies" to allow you to move more quickly through the site. By understanding how our Web Portal 
					is accessed, we can continually improve it to respond to our user's interests. If you do not want information collected through the use of cookies, there 
					is a simple procedure in most browsers that allows you to deny or accept the cookie feature. Please note that cookies may be necessary to enable you to use 
					certain features on our Web Portal.</p>
				</tr>
				<tr class="priv_h3">
					<h3> Disclosure to Third Parties </h3>
					<p class="priv">We do not disclose personal and non-personal information to third parties.</p>
				</tr>
				<tr>
					<h3 class="priv_h3"> Access to Personal Information </h3>
					<p class="priv">You can help ensure that your personal information and preferences are accurate, complete, and up to date by logging in to your account at 
					<a href="http://www.barangaypitogomakati.gov.ph" target="_blank"> Barangay Pitogo </a></p>
				</tr>
				<tr>
					<h3 class="priv_h3"> Changes in Our Privacy Policy </h3>
					<p class="priv">We reserve the right to make changes to our Privacy Policy at any time and for any reason without prior notice.</p>
				</tr>
				</table>
			</div>
        </div>
    </div>

@include('layouts.footer')

@endsection