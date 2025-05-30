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
			font-size: 13px;
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
			padding: 4px 6px;
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
			font-size: 15px;
		}

		.text-sm {
			font-size: 12px;
		}

		.text-xs {
			font-size: 10px;
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

		.img-sm {
			width: 100px;
			height: 80px;
		}

		.spacer {
			width: 10px;
			display: inline-block;
		}

		.img-sm-wrapper {
			padding-bottom: 8px;
			display: inline-block;
			vertical-align: top;
			width: 100px;
			text-align: center;
		}

		.w-50 {
			width: 50%;
		}

		.text-condensed {
			line-height: 1;
			letter-spacing: -0.2;
		}
	</style>

</head>

<body>
	<!-- COVER PAGE -->
	{{-- <section class="a4-size page-break" style="outline: 1px solid black;">
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
	</section> --}}


	<!-- SPECIFICATION PAGE -->
	{{-- <section class="a4-size page-break">
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
	</section> --}}

	{{-- SINGLE ITEM PAGE --}}
	<section class="a4-size page-break">
		<table class="equal-width table">
			<tr>
				<td><span class="fw-bold text-sm">PROJECT:</span> <br><span class="fw-bold text-md">SAROVAR PORTICO, MUMBAI</span>
				</td>
				<td><span class="fw-bold text-sm">MANUFACTURER'S DETAILS:</span> <br><span class="fw-bold text-md">To bid</span></td>
				<td class="fw-bold text-md" style="text-align: center !important;">ITEM CODE:<br><span class="text-md">FF -
						301</span>
				</td>
			</tr>
			<tr>
				<td><span class="fw-bold text-sm">ITEM NAME:</span> <br><span class="text-md">Dining table</span></td>
				<td><span class="fw-bold text-sm">DESCRIPTION:</span> <br><span class="text-md">Laminate with metal and tile top
						dining table</span></td>
				<td><span class="fw-bold text-sm">TOTAL QUANTITY:</span> <br><span class="text-md">22 nos</span></td>
			</tr>
			<tr>
				<td><span class="fw-bold text-sm">AREA/LOCATION:</span> <br><span class="text-md">All day dining</span></td>
				<td><span class="fw-bold text-sm">PRODUCT CODE:</span> <br><span class="text-md"></span></td>
				<td><span class="fw-bold text-sm">REVISION:</span> <br><span class="text-md"></span></td>
			</tr>
			<tr>
				<td class="fw-bold uppercase" style="border-bottom:0;" colspan="3">SKETCH / PHOTOS / MATERIAL / SWATCH REFERENCE
					/
					SPECIFICATIONS / NOTES</td>
			</tr>
			<tr>
				<td style="border-top:0;" colspan="3">
					<table class="table-borderless" style="width: 100%; margin:0;padding:0;">
						{{-- INFO AND THUMBNAIL --}}
						<tr>
							<!-- LEFT: TEXT INFO -->
							<td style="width: 50%; vertical-align: top; padding-right: 10px;" colspan="3">
								Model number: Custom furniture<br>
								Model name: Custom made furniture<br>
								Width: 700 mm<br>
								Length: 900 mm<br>
								Height: 750 mm<br>
								Material: Metal, wood and tile<br>
								Details: Refer to FF&E shop drawing<br>
								Note: Supplier to coordinate the items structure and stability.
							</td>

							<!-- RIGHT: IMAGE -->
							<td style="width: 40%; vertical-align: top; text-align: right;" rowspan="2">
								<img src="{{ public_path('images/item thumbnail 1.png') }}" alt="Furniture"
									style="max-height: 100%; max-width: 100%; width: 100%; object-fit: contain; border: 1px solid #ccc; padding: 2px; display: block; margin-left: auto;" />
							</td>
						</tr>

						{{-- SWATCHES --}}
						<tr>
							<td style="text-align: left;" colspan="3">
								<div class="img-sm-wrapper">
									<div class="img-sm"
										style="
									background: url('{{ public_path('images/swatches (2).png') }}') center center/cover no-repeat;">
									</div>
									<div style="font-size: 12px; margin-top: 1px;">TILE FINISH <br> TL- 02</div>
								</div>
								<div class="spacer"></div> <!-- spacer -->
								<div class="img-sm-wrapper">
									<div class="img-sm"
										style="
									background: url('{{ public_path('images/swatches (2).png') }}') center center/cover no-repeat;">
									</div>
									<div style="font-size: 12px; margin-top: 1px;">TILE FINISH <br> TL- 02</div>

								</div>
								<div class="spacer"></div> <!-- spacer -->
								<div class="img-sm-wrapper">
									<div class="img-sm"
										style="
									background: url('{{ public_path('images/swatches (2).png') }}') center center/cover no-repeat;">
									</div>
									<div style="font-size: 12px; margin-top: 1px;">TILE FINISH <br> TL- 02</div>
								</div>
							</td>
						</tr>

						{{-- GENERAL NOTES --}}
						<tr>
							<td class="text-condensed text-sm" colspan="4">
								<div class="fw-bold uppercase">GENERAL NOTES: </div>
								<div>* Manufacturer to ensure support and stability of product.</div>
								<div>* All construction methods and finishes must be of contract quality suitable for commercial and hospitality
									use, of new high-grade material, clean and free from defects in material and workmanship/fabrication in
									accordance
									with House of Elm.</div>
								<div>* All Local Codes for installation methods and practices must be observed.</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		{{-- CONTACT --}}
		<table class="table">
			<tr>
				<td class="fw-bold text-sm uppercase" style="width: 60%; border-top:none;">
					<div>CONTACT PERSON:</div>
					<div>TELEPHONE:</div>
					<div>FACSIMILE:</div>
					<div>E-MAIL:</div>
					<div>WEBSITE</div>
				</td>
				<td style="border-top:none;">
					<div class="fw-bold text-sm uppercase">REQUIRED ITEMS FOR DESIGN APPROVAL PRIOR TO FABRICATION:</div>
					<ul class="text-sm" style="line-height: 1;margin-left:-20px;margin-top: 0px;">
						<li>Shop Drawing</li>
						<li>Finish Sample</li>
						<li>Prototype</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td class="text-condensed text-xs" colspan="2">
					<div class="fw-bold uppercase">REMARKS: </div>
					This is a preliminary information sheet only and not for construction purposes. Refer to material reference boards
					& fabric swatch submitted by STUDIO for actual samples. Manufacturer to provide STUDIO with shop drawings and
					prototype sample pieces for approval prior to production. Manufacturer to work in conjunction with designer to
					ensure proper proportions & design intent. The furniture, fittings & equipment pieces in this specification book is
					for design intent only.
				</td>
			</tr>
		</table>
	</section>

	{{-- DRAWING PAGE --}}
	<section class="a4-size page-break" style="outline: 1px solid black; position: relative;">
		<table class="table" style="width: 100%; height: 98%;">
			<tr style="vertical-align: middle;">
				<td style="text-align: center;" colspan="2">
					<div class="img-sm-wrapper">
						<div class="img-sm"
							style="
									background: url('{{ public_path('images/swatches (2).png') }}') center center/cover no-repeat;">
						</div>
						<div style="font-size: 12px; margin-top: 1px;">TILE FINISH <br> TL- 02</div>
					</div>
					<div class="spacer"></div> <!-- spacer -->
					<div class="img-sm-wrapper">
						<div class="img-sm"
							style="
									background: url('{{ public_path('images/swatches (2).png') }}') center center/cover no-repeat;">
						</div>
						<div style="font-size: 12px; margin-top: 1px;">TILE FINISH <br> TL- 02</div>

					</div>
					<div class="spacer"></div> <!-- spacer -->
					<div class="img-sm-wrapper">
						<div class="img-sm"
							style="
									background: url('{{ public_path('images/swatches (2).png') }}') center center/cover no-repeat;">
						</div>
						<div style="font-size: 12px; margin-top: 1px;">TILE FINISH <br> TL- 02</div>
					</div>
					<div class="spacer"></div> <!-- spacer -->

					<div class="img-sm-wrapper">
						<img src="{{ public_path('images/item thumbnail 1.png') }}" alt="Dining Table" style="width: 100px;">
					</div>
				</td>
			</tr>

			<tr style="vertical-align: middle; text-align: center;">
				<td class="w-50">
					<img src="{{ public_path('images/item thumbnail 1.png') }}" alt="Dining Table">
				</td>
				<td>
					<img src="{{ public_path('images/item thumbnail 1.png') }}" alt="Dining Table">
				</td>
			</tr>
			<tr style="vertical-align: middle; text-align: center;">
				<td class="w-50">
					<img src="{{ public_path('images/item thumbnail 1.png') }}" alt="Dining Table">
				</td>
				<td>
					<img src="{{ public_path('images/item thumbnail 1.png') }}" alt="Dining Table">
				</td>
			</tr>
		</table>

		<div style="position: absolute; bottom: 0; width: 100%;">
			<table class="table" style="width: 100%;">
				<tr>
					<td style="text-align: right;" colspan="4">
						<div class="text-condensed text-xs" style="display: inline-block; border: 1px solid #000; padding: 1px 4px;">
							Note: Manufacturer to provide detailed <br> shop drawings prior to construction
						</div>
					</td>
				</tr>
				<tr>
					<td class="text-sm" style="text-align: center;" colspan="4">
						DESIGN DEVELOPMENT ONLY - NOT INTENDED FOR CONSTRUCTION
					</td>
				</tr>
				<tr>
					<td>
						<img class="logo" src="{{ public_path('images/Houseofelm logo.png') }}" alt="House of Elm Logo"
							style="width:150px;">
					</td>
					<td class="text-condensed text-xs">HOUSE OF ELM TEMPLATE VERSION 2023</td>
					<td style="vertical-align: top;" rowspan="2">
						<div class="text-condensed text-xs">PROJECT NAME:</div> <b>SAROVAR PORTICO, MUMBAI</b> <br><br>
						<div class="text-condensed text-xs"> ADDRESS:</div> <b>MUMBAI, INDIA</b> <br><br>
					</td>
					<td>
						<table class="table-borderless text-condensed text-xs" cellspacing="0" cellpadding="0">
							<tr>
								<td><b>PROJECT #:</b></td>
								<td><b>20031</b></td>
							</tr>
							<tr>
								<td><b>Issue date:</b></td>
								<td><!-- Add issue date here --></td>
							</tr>
							<tr>
								<td><b>Studio principal:</b></td>
								<td>Milouni Mehta</td>
							</tr>
							<tr>
								<td><b>Drawn by:</b></td>
								<td>Mahavira Gupta</td>
							</tr>
							<tr>
								<td><b>Checked by:</b></td>
								<td>Milouni Mehta</td>
							</tr>
							<tr>
								<td><b>Scale:</b></td>
								<td>As shown</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>

	</section>
</body>

</html>
