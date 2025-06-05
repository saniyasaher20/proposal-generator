<x-filament::page>
	<div class="mb-1 flex justify-end">
		<a class="bg-primary-600 inline-block rounded px-2 py-1 text-sm text-white"
			href="{{ route('proposals.pdf', $record->id) }}" target="_blank">
			Download PDF
		</a>
	</div>

	<style>
		/* Simulate @page margin in HTML */
		.page {
			width: 210mm;
			height: 297mm;
			margin: auto;
			box-sizing: border-box;
			background: white;
			padding: var(--page-margin);
			position: relative;
		}

		/* A4 content block inside page with same padding as @page margins */
		.a4-size {
			width: 100%;
			height: 100%;
			box-sizing: border-box;
			position: relative;
			overflow: hidden;
		}

		.wrapper {
			line-height: 1.5;
			padding: 0;
		}

		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 400;
			src: url('{{ asset('fonts/open_sans/OpenSans-Regular.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 600;
			src: url('{{ asset('fonts/open_sans/OpenSans-SemiBold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 700;
			src: url('{{ asset('fonts/open_sans/OpenSans-Bold.ttf') }}') format('truetype');
		}

		@font-face {
			font-family: "Open Sans";
			font-style: normal;
			font-weight: 800;
			src: url('{{ asset('fonts/open_sans/OpenSans-ExtraBold.ttf') }}') format('truetype');
		}
	</style>
	@include('pdf.partials.styles')

	<div class="wrapper" style="background-color: var(--light-gray); padding: 20px;">


		<!-- COVER PAGE -->
		<div class="page">
			@include('pdf.partials.cover-page')
		</div>

		{{-- ITEM LIST PAGE --}}
		{{-- @include('pdf.partials.specification-page') --}}

		{{-- SINGLE ITEM PAGE --}}
		{{-- @include('pdf.partials.single-item-page') --}}

	</div>

</x-filament::page>
