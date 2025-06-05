<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Proposal PDF</title>
	<style>
		body {
			line-height: 1;
		}
		@page
		{
			margin: var(--page-margin);
			padding: 0;
			size: A4;
		}

		.a4-size {
			/* margin: 0 auto; */
			box-sizing: border-box;
			position: relative;
			overflow: hidden;
		}

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
	</style>
	@include('pdf.partials.styles')
</head>

<body>
	<!-- COVER PAGE -->
	@include('pdf.partials.cover-page')

	{{-- ITEM LIST PAGE --}}
	@include('pdf.partials.specification-page')

	{{-- SINGLE ITEM PAGE --}}
	@include('pdf.partials.single-item-page')

</body>

</html>
