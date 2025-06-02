<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Proposal PDF</title>
	@include('pdf.partials.styles')
</head>

<body>
	<!-- COVER PAGE -->
	{{-- @include('pdf.partials.cover-page') --}}

	{{-- ITEM LIST PAGE --}}
	@include('pdf.partials.specification-page')

	{{-- SINGLE ITEM PAGE --}}
	@include('pdf.partials.single-item-page')

	{{-- DRAWING PAGE --}}
	@include('pdf.partials.drawing-page')

</body>
</html>
