<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Proposal PDF</title>
	<style>
		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 100;
			src: url('{{ public_path('fonts/leagueSpartan-Thin.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 200;
			src: url('{{ public_path('fonts/leagueSpartan-ExtraLight.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 300;
			src: url('{{ public_path('fonts/leagueSpartan-Light.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 400;
			src: url('{{ public_path('fonts/leagueSpartan-Regular.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 500;
			src: url('{{ public_path('fonts/leagueSpartan-Medium.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 600;
			src: url('{{ public_path('fonts/leagueSpartan-SemiBold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 700;
			src: url('{{ public_path('fonts/leagueSpartan-Bold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 800;
			src: url('{{ public_path('fonts/leagueSpartan-ExtraBold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "League Spartan";
			font-style: normal;
			font-weight: 900;
			src: url('{{ public_path('fonts/leagueSpartan-Black.ttf') }}') format('truetype');
		}

		body {
			font-family: "League Spartan", sans-serif;
			color: #000;
			margin: 0;
			padding: 0;
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
			padding: 6px;
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
			table-layout: fixed;
			width: 100%;
		}

		.table.equal-width td {
			width: 33.33%;
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
	</style>

</head>

<body>
	<!-- COVER PAGE -->
	<div class="a4-size page-break" style="outline: 1px solid black;">
		<div class="cover-page" style="position: relative; width: 100%; height: 100%;">
			<!-- Centered intro -->
			<div class="intro uppercase"
				style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
				<img class="logo" src="{{ public_path('images/Houseofelm logo.png') }}" alt="House of Elm Logo">

				<div class="project-info" style="margin-bottom: 30px;">
					<div class="text-lg">Sarovar Portico,</div>
					<div class="text-lg">Mumbai</div>
				</div>

				<div class="description text-md">
					LOOSE FURNITURE<br>
					SERIES 3.00<br>
					ALL DAY DINING AND LIFT LOBBY
				</div>
			</div>

			<!-- Footer -->
			<div class="footer footer-text" style="position: absolute; bottom: 5mm; right: 5mm;">
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
	</div>


	<!-- SPECIFICATION PAGE -->
	<div class="a4-size page-break">
		<table class="table-borderless project-header">
			<tr>
				<td>
					<b class="text-md uppercase">SAROVAR PORTICO, MUMBAI</b><br>
					<div class="text-sm uppercase">PROJECT NUMBER: 20031<br>SCHEDULE FOR INTERIOR FINISHES</div>
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
					<td colspan="4"><b>CASE GOOD</b></td>
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
	</div>

	{{-- SINGLE ITEM PAGE --}}
	<table class="equal-width table">
		<tr>
			<td><b>PROJECT:</b><br><span>SAROVAR PORTICO, MUMBAI</span></td>
			<td><b>MANUFACTURER'S DETAILS:</b><br><span>TO BID</span></td>
			<td class="text-md" style="text-align: center !important;"><b>ITEM CODE:<br><span>FF - 301</span></b></td>
		</tr>
		<tr>
			<td><b>ITEM NAME:</b><br>DINING TABLE</td>
			<td><b>DESCRIPTION:</b><br>LAMINATE WITH METAL AND TILE TOP DINING TABLE</td>
			<td><b>TOTAL QUANTITY:</b><br>22 NOS</td>
		</tr>
		<tr>
			<td><b>AREA/LOCATION:</b><br>ALL DAY DINING</td>
			<td><b>PRODUCT CODE:</b><br></td>
			<td><b>REVISION:</b><br></td>
		</tr>
	</table>


	<!-- Sketch / Specs Row -->
	<table class="table" style="margin-top: 10px;">
		<tr>
			<td style="width: 65%; vertical-align: top;">
				<b>MODEL NUMBER:</b> CUSTOM FURNITURE<br>
				<b>MODEL NAME:</b> CUSTOM MADE FURNITURE<br>
				<b>WIDTH:</b> 700 MM<br>
				<b>LENGTH:</b> 900 MM<br>
				<b>HEIGHT:</b> 750 MM<br>
				<b>MATERIAL:</b> METAL, WOOD AND TILE<br>
				<b>DETAILS:</b> REFER TO FF&E SHOP DRAWING<br>
				<b>NOTE:</b> SUPPLIER TO COORDINATE THE ITEMS STRUCTURE AND STABILITY.
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
							<b>TILE FINISH</b><br>TL - 02
						</td>
						<td>
							<img class="material-swatch" src="{{ public_path('images/metal-finish.png') }}"><br>
							<b>METAL FINISH</b><br>MT - 02
						</td>
						<td>
							<img class="material-swatch" src="{{ public_path('images/wood-finish.png') }}"><br>
							<b>SOLID WOOD FINISH</b>
						</td>
					</tr>
				</table>

				<br>
				<b>General Notes:</b><br>
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
				<b>CONTACT PERSON:</b><br><br>
				<b>TELEPHONE:</b><br>
				<b>FACSIMILE:</b><br>
				<b>E-MAIL:</b>
			</td>
			<td style="width: 50%;">
				<b>REQUIRED ITEMS FOR DESIGN APPROVAL PRIOR TO FABRICATION:</b>
				<ul class="checklist">
					<li>Shop Drawing</li>
					<li>Finish Sample</li>
					<li>Prototype</li>
				</ul>
			</td>
		</tr>
	</table>

	<div class="remarks">
		<b>REMARKS:</b><br>
		This is a preliminary information sheet only and not for construction purposes. Refer to material reference boards &
		fabric swatch submitted by STUDIO for actual samples. Manufacturer to provide STUDIO with shop drawings and prototype
		sample pieces for approval prior to production. Manufacturer to work in conjunction with designer to ensure proper
		proportions & design intent. The furniture, fittings & equipment pieces in this specification book is for design
		intent only.
	</div>
</body>

</html>
