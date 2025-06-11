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

		box-shadow: 0 4px 16px rgba(0, 0, 0, 0.5);
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
		overflow: scroll;
		height: calc(297mm + 20mm);
		/* a4 size page height plus some extra*/
	}

	.page-zoom-container {
		transform-origin: top left;
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
    .button-wrapper {
       text-align: center;
    }
    .button-wrapper button{
        padding: 2px 5px;
        font-size: 12px;
        margin-right: 5px;
        cursor: pointer;
        background-color: #3C3C3C;
        color: white;
    }
</style>


@include('pdf.partials.styles')
<div class="button-wrapper" style="margin-bottom: 10px;">
	<button onclick="zoomOut()">−</button>
	<button onclick="zoomIn()">＋</button>
</div>

<div class="wrapper">
	<div class="page-zoom-container" id="page-zoom-container">
		<!-- COVER PAGE -->
		<div class="page">
			@include('pdf.partials.cover-page')
		</div>
		<div class="page">
			@include('pdf.partials.cover-page')
		</div>
	</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let zoomLevel = 0.7;
        const zoomStep = 0.1;
        const minZoom = 0.3;
        const maxZoom = 2;

        function applyZoom() {
            const container = document.getElementById('page-zoom-container');
            container.style.transform = `scale(${zoomLevel})`;
        }

        window.zoomIn = function() {
            if (zoomLevel + zoomStep <= maxZoom) {
                zoomLevel += zoomStep;
                applyZoom();
            }
        }

        window.zoomOut = function() {
            if (zoomLevel - zoomStep >= minZoom) {
                zoomLevel -= zoomStep;
                applyZoom();
            }
        }

        applyZoom();
    });
</script>
