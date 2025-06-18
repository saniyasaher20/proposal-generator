<section class="a4-size page-break" style="outline: 1px solid black;">
	<div class="cover-page" style="position: relative; width: 100%; height: 100%;">
		<!-- Centered intro -->
		<div class="intro uppercase"
			style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
			<img class="logo"
				src="{{ $usePublicPath ? public_path('storage/' . $company->logo_path) : asset('storage/' . $company->logo_path) }}"
				alt="House of Elm Logo" style="margin-bottom: 50px;">

			<div class="project-info" style="margin-bottom: 50px; font-size: 26px;">
				<div class="fw-bold">{{ $proposal->project_name }},</div>
				<div class="fw-semibold"> {{ $proposal->project_location }}</div>
			</div>

			<div class="description fw-bold text-md">
				{{ $proposal->spec_name }}<br>
				SERIES {{ $proposal->spec_series }}<br>
				{{ $proposal->spec_area }}
			</div>
		</div>

		<!-- Footer -->
		<div class="footer footer-text fw-semibold" style="position: absolute; bottom: 5mm; right: 5mm;">
			<div class="uppercase">
				PREPARED BY:<br>HOUSE OF ELM<br>
			</div>
			{!! nl2br(e($company->address)) !!}<br>
			<div class="lowercase">
				@foreach ($company->emails as $email)
					<a href="mailto:{{ $email }}">{{ $email }}</a><br>
				@endforeach
			</div>
			Date of Issue: {{ $proposal->issue_date->format('d F Y') }}
		</div>
	</div>
</section>
