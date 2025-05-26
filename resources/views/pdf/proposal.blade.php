<!DOCTYPE html>
<html lang="en">

<head>
	{{-- <style>
		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 100;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-Thin.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 200;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-ExtraLight.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 300;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-Light.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 400;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-Regular.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 500;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-Medium.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 600;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-SemiBold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 700;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-Bold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 800;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-ExtraBold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 900;
			src: url('{{ public_path('fonts/league_spartan/leagueSpartan-Black.ttf') }}') format('truetype');
		}

		body {
			font-family: "League Spartan", sans-serif;
		}
	</style> --}}

	<style>
		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 400;
			src: url('{{ public_path('fonts/open_sans/OpenSans-Regular.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 600;
			src: url('{{ public_path('fonts/open_sans/OpenSans-SemiBold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 700;
			src: url('{{ public_path('fonts/open_sans/OpenSans-Bold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 800;
			src: url('{{ public_path('fonts/open_sans/OpenSans-ExtraBold.ttf') }}') format('truetype');
		}

		/* @font-face {
			font-family: "Open Sans";
			font-style: italic;
			font-weight: 400;
			src: url('{{ public_path('fonts/open_sans/OpenSans-Italic.ttf') }}') format('truetype');
		}
		@font-face {
			font-family: "Open Sans";
			font-style: italic;
			font-weight: 600;
			src: url('{{ public_path('fonts/open_sans/OpenSans-SemiBoldItalic.ttf') }}') format('truetype');
		}
		@font-face {
			font-family: "Open Sans";
			font-style: italic;
			font-weight: 700;
			src: url('{{ public_path('fonts/open_sans/OpenSans-BoldItalic.ttf') }}') format('truetype');
		}
		@font-face {
			font-family: "Open Sans";
			font-style: italic;
			font-weight: 800;
			src: url('{{ public_path('fonts/open_sans/OpenSans-ExtraBoldItalic.ttf') }}') format('truetype');
		} */
		body {
			font-family: "Open Sans", sans-serif;
		}
	</style>
	<meta charset="UTF-8">
	<title>Proposal PDF</title>
	<style>
		body {
			color: #000;
			margin: 0;
			padding: 0;
			line-height: 1;
		}

		.uppercase {
			text-transform: uppercase;
		}

		.lowercase {
			text-transform: lowercase;
		}

		.a4-size {
			margin: 0 auto;
			box-sizing: border-box;
			position: relative;
			overflow: hidden;
		}

		.page-break {
			page-break-after: always;
		}

		.table {
			width: 100%;
			font-size: 13px;
			border-collapse: collapse;
		}

		.table th,
		.table td {
			border: 0.5px solid #000;
			padding: 1px 4px;
			text-transform: uppercase;
		}

		.table.table-text-center td {
			text-align: center;

		}

		.table th {
			vertical-align: middle;
		}

		.table td {
			vertical-align: top;
		}

		.table.equal-width {
			table-layout: auto;
			width: 100%;
		}

		.table.equal-width td {
			/* width: 33.33%; */
			vertical-align: top;
			word-break: break-word;
			white-space: normal;
		}

		.table-borderless td {
			border: none !important;
			vertical-align: top;
			text-align: left;
		}

		.logo {
			width: 350px;
			margin-bottom: 20px;
		}

		.text-lg {
			font-size: 20px;
		}

		.text-md {
			font-size: 16px;
		}

		.text-sm {
			font-size: 13px;
		}

		.footer-text {
			font-size: 13px;
			text-align: right;
		}

		.project-header td {
			vertical-align: top;
			font-size: 13px;
		}

		.image-cell img {
			max-width: 100px;
			height: auto;
		}

		.section-heading {
			font-weight: bold;
			margin: 10px 0 5px;
		}

		.material-swatch {
			width: 80px;
			height: auto;
		}

		.spec-image {
			width: 250px;
			height: auto;
			border: 1px solid #000;
		}

		.checklist {
			margin: 0;
			padding-left: 15px;
		}

		.checklist li {
			margin-bottom: 5px;
		}

		.remarks {
			font-size: 11px;
			border: 1px solid #000;
			padding: 5px;
			margin-top: 10px;
		}

		.fw-normal {
			font-weight: 400;
		}

		.fw-semibold {
			font-weight: 600;
		}

		.fw-bold {
			font-weight: 700;
		}

		.fw-bolder {
			font-weight: 800;
		}
	</style>

</head>

<body>
	<!-- COVER PAGE -->
	{{-- <div class="a4-size page-break" style="outline: 1px solid black;">
		<div class="cover-page" style="position: relative; width: 100%; height: 100%;">
			<!-- Centered intro -->
			<div class="intro uppercase"
				style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
				<img class="logo" src="{{ public_path('images/Houseofelm logo.png') }}" alt="House of Elm Logo"
					style="margin-bottom: 50px;">

				<div class="project-info" style="margin-bottom: 50px; font-size: 26px; line-height: 1;">
					<div class="fw-bold">Sarovar Portico,</div>
					<div class="fw-semibold">Mumbai</div>
				</div>

				<div class="description fw-bold text-md" style="line-height: 1;">
					LOOSE FURNITURE<br>
					SERIES 3.00<br>
					ALL DAY DINING AND LIFT LOBBY
				</div>
			</div>

			<!-- Footer -->
			<div class="footer footer-text fw-semibold" style="position: absolute; bottom: 5mm; right: 5mm;">
				<div class="uppercase">
					PREPARED BY:<br>HOUSE OF ELM<br>
				</div>
				403, 4<sup>th</sup> Floor, Trade World B-wing,<br>
				Kamala Mills Compound, Lower Parel,<br>
				Mumbai - 40013<br>
				<div class="lowercase">
					<a href="mailto:milouni@houseofelm.design">milouni@houseofelm.design</a><br>
					<a href="mailto:swati@houseofelm.design">swati@houseofelm.design</a><br>
					<a href="mailto:mahavira@houseofelm.design">mahavira@houseofelm.design</a>
				</div>
				Date of Issue: 31<sup>st</sup> MARCH 2025
			</div>
		</div>
	</div> --}}


	<!-- SPECIFICATION PAGE -->
	{{-- <div class="a4-size page-break">
		<table class="table-borderless project-header">
			<tr>
				<td>
					<b class="fw-bold text-md uppercase">SAROVAR PORTICO, MUMBAI <br>
					<div class="fw-bold text-sm uppercase">PROJECT NUMBER: 20031<br>SCHEDULE FOR INTERIOR FINISHES</div>
					<div class="text-sm">Date of Issue: 31<sup>st</sup> MARCH 2025</div>
				</td>
				<td style="text-align: right;">
					<img src="{{ public_path('images/Houseofelm logo.png') }}" alt="House of Elm Logo" style="width: 200px;">
				</td>
			</tr>
			<tr>
				<td class="text-sm uppercase" colspan="2">
					<br>
					MUST BE OF CONTRACT QUALITY AND SUITABLE FOR COMMERCIAL USE, FABRICATION TO BE IN ACCORDANCE WITH HOUSE OF ELM
					PREAMBLES AND AS FOLLOWS:
				</td>
			</tr>
		</table>

		<h4 style="margin-bottom: 10px;">FURNITURE SPECIFICATION SCHEDULE</h4>
		<table class="table-text-center table">
			<thead>
				<tr>
					<th>Code</th>
					<th>Description</th>
					<th>Location</th>
					<th>Image</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="4"> CASE GOOD </td>
				</tr>
				<tr>
					<td>FF - 301</td>
					<td>Dining Table</td>
					<td>All Day Dining</td>
					<td class="image-cell">
						<img src="{{ public_path('images/item thumbnail 1.png') }}" alt="Dining Table">
					</td>
				</tr>
			</tbody>
		</table>
	</div> --}}

	{{-- SINGLE ITEM PAGE --}}
	<table class="equal-width table">
		<tr>
			<td><span class="fw-semibold text-sm">PROJECT:</span> <br><span class="fw-bold">SAROVAR PORTICO, MUMBAI</span></td>
			<td><span class="fw-semibold">MANUFACTURER'S DETAILS:</span> <br><span class="fw-bold">To bid</span></td>
			<td class="text-md fw-bold" style="text-align: center !important;"> ITEM CODE:<br><span>FF - 301</span> </td>
		</tr>
		<tr>
			<td><span class="fw-semibold text-sm">ITEM NAME:</span> <br><span>Dining table</span></td>
			<td><span class="fw-semibold text-sm">DESCRIPTION:</span> <br><span>Laminate with metal and tile top
					dining table</span></td>
			<td><span class="fw-semibold text-sm">TOTAL QUANTITY:</span> <br><span>22 nos</span></td>
		</tr>
		<tr>
			<td><span class="fw-semibold text-sm">AREA/LOCATION:</span> <br><span>All day dining</span></td>
			<td><span class="fw-semibold text-sm">PRODUCT CODE:</span> <br><span></span></td>
			<td><span class="fw-semibold text-sm">REVISION:</span> <br><span></span></td>
		</tr>
	</table>


	<!-- Sketch / Specs Row -->
	<table class="table" style="margin-top: 10px;">
		<tr>
			<td style="width: 65%; vertical-align: top;">
				MODEL NUMBER: CUSTOM FURNITURE<br>
				MODEL NAME: CUSTOM MADE FURNITURE<br>
				WIDTH: 700 MM<br>
				LENGTH: 900 MM<br>
				HEIGHT: 750 MM<br>
				MATERIAL: METAL, WOOD AND TILE<br>
				DETAILS: REFER TO FF&E SHOP DRAWING<br>
				NOTE: SUPPLIER TO COORDINATE THE ITEMS STRUCTURE AND STABILITY.
			</td>
			<td style="width: 35%; text-align: center;">
				<img class="spec-image" src="{{ public_path('images/item thumbnail 1.png') }}" alt="Furniture">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="section-heading">SKETCH / PHOTOS / MATERIAL / SWATCH REFERENCE / SPECIFICATIONS / NOTES</div>
				<table class="table-borderless" style="width: 100%; margin-top: 5px;">
					<tr style="text-align: center;">
						<td>
							<img class="material-swatch" src="{{ public_path('images/tile-finish.png') }}"><br>
							TILE FINISH <br>TL - 02
						</td>
						<td>
							<img class="material-swatch" src="{{ public_path('images/metal-finish.png') }}"><br>
							METAL FINISH <br>MT - 02
						</td>
						<td>
							<img class="material-swatch" src="{{ public_path('images/wood-finish.png') }}"><br>
							SOLID WOOD FINISH
						</td>
					</tr>
				</table>

				<br>
				General Notes: <br>
				<ul class="checklist">
					<li>* Manufacturer to ensure support and stability of product.</li>
					<li>* All construction methods and finishes must be of contract quality suitable for commercial and hospitality
						use, of new high-grade material, clean and free from defects in material and workmanship/fabrication in accordance
						with House of Elm.</li>
					<li>* All Local Codes for installation methods and practices must be observed.</li>
				</ul>
			</td>
		</tr>
	</table>

	<table class="table" style="margin-top: 10px;">
		<tr>
			<td style="width: 50%;">
				CONTACT PERSON: <br><br>
				TELEPHONE: <br>
				FACSIMILE: <br>
				E-MAIL:
			</td>
			<td style="width: 50%;">
				REQUIRED ITEMS FOR DESIGN APPROVAL PRIOR TO FABRICATION:
				<ul class="checklist">
					<li>Shop Drawing</li>
					<li>Finish Sample</li>
					<li>Prototype</li>
				</ul>
			</td>
		</tr>
	</table>

	<div class="remarks">
		REMARKS: <br>
		This is a preliminary information sheet only and not for construction purposes. Refer to material reference boards &
		fabric swatch submitted by STUDIO for actual samples. Manufacturer to provide STUDIO with shop drawings and prototype
		sample pieces for approval prior to production. Manufacturer to work in conjunction with designer to ensure proper
		proportions & design intent. The furniture, fittings & equipment pieces in this specification book is for design
		intent only.
	</div>
</body>

</html>
