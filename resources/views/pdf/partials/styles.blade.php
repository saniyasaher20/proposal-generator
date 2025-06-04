<style>
	:root {
		--light-gray: #f0f0f0;
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

	table.single-item-info-table td,
	table.single-item-info-table th,
	{
	padding: auto 0;
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

	.p-0 {
		padding: 0;
	}

	.m-0 {
		margin: 0;
	}

	.table-project-info th,
	.table-project-info td {
		padding: 0px 5px !important;
		margin: 0 !important;
		border: none;
	}

	.drawing-page-footer table.parent-table th,
	.drawing-page-footer table.parent-table td {
		padding: 10px 10px;
		margin-bottom: 20px;
	}

	
</style>
