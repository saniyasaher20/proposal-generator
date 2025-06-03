<section class="a4-size page-break drawing-page-footer" style="outline: 1px solid black;position: relative;">
	<table class="table-borderless" style="width: 100%; height: 98%;">
		<tr style="vertical-align: middle;">
			<td style="text-align: center;" colspan="2">
				@foreach ($item->swatches as $swatch)
					<div class="img-sm-wrapper">
						<div class="img-sm"
							style="
									 background: url('{{ public_path('storage/' . $swatch->image_path) }}') center center/cover no-repeat;">
						</div>
						<div style="font-size: 12px; margin-top: 1px;">{{ $swatch->name }}<br>{{ $swatch->code }}</div>
					</div>
					<div class="spacer"></div> <!-- spacer -->
				@endforeach
				<div class="img-sm-wrapper">
					@if ($item->thumbnail_path)
						<img src="{{ public_path('storage/' . $item->thumbnail_path) }}" alt="{{ $item->item_name }}"
							style="max-height: 100%; max-width: 100%; width: 100%; object-fit: contain; border: 1px solid #ccc; padding: 2px; display: block; margin-left: auto;">
					@endif
				</div>
			</td>
		</tr>
		@foreach ($item->drawings as $i => $drawing)
			@if ($i % 2 === 0)
				<tr style="vertical-align: middle; text-align: center;">
					<td class="w-50">
						@if (isset($item->drawings[$i]))
							<img src="{{ public_path('storage/' . $item->drawings[$i]) }}" alt="Drawing {{ $i + 1 }}"
								style="max-width: 100%; max-height: 300px; object-fit: contain; display: block; margin: 0 auto;">
						@endif
					</td>
					<td>
						@if (isset($item->drawings[$i + 1]))
							<img src="{{ public_path('storage/' . $item->drawings[$i + 1]) }}" alt="Drawing {{ $i + 2 }}"
								style="max-width: 100%; max-height: 300px; object-fit: contain; display: block; margin: 0 auto;">
						@endif
					</td>
				</tr>
			@endif
		@endforeach


	</table>

	@include('pdf.partials.drawing-page-footer')
</section>
