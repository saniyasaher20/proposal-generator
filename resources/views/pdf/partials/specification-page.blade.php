<section class="a4-size page-break">
	<table class="table" width="100%" cellspacing="0" cellpadding="8">
		<thead>
			{{-- ── Row 1: Specification page header partial ── --}}
			<tr>
				<td style="padding:auto 0 !important;background-color: #ffffff; border: none !important;" colspan="4">
					@include('pdf.partials.specification-page-header')
				</td>
			</tr>

			{{-- ── Row 2: Schedule title ── --}}
			<tr>
				<th class="text-lg"
					style="
						border:none !important;
						text-align:left;
						padding:auto 0 !important;
                    "
					colspan="4">
					FURNITURE SPECIFICATION SCHEDULE
				</th>
			</tr>

			{{-- ── Row 3: Column headings ── --}}
			<tr>
				<th style="background-color: var(--light-gray)">Code</th>
				<th style="background-color: var(--light-gray)">Description</th>
				<th style="background-color: var(--light-gray)">Location</th>
				<th style="background-color: var(--light-gray)">Image</th>
			</tr>
		</thead>

		<tbody>
			{{-- Loop by category so each group appears under its own header row --}}
			@foreach ($proposal->items->groupBy('item_category') as $categoryName => $items)
				{{-- Category header row (in the body) --}}
				<tr>
					<td class="fw-bold uppercase" style="text-align: left;padding: 6px;" colspan="4">
						{{ $categoryName }}
					</td>
				</tr>

				{{-- Each item in that category --}}
				@foreach ($items as $item)
					<tr>
						<td>{{ $item->item_code }}</td>
						<td>{{ $item->item_name }}</td>
						<td>{{ $item->location }}</td>
						<td style="text-align: center;">
							@if ($item->thumbnail_path)
								<img src="{{ public_path('storage/' . $item->thumbnail_path) }}" alt="Item Image"
									style="width: 80px; height: auto;">
							@else
								N/A
							@endif
						</td>
					</tr>
				@endforeach
			@endforeach
		</tbody>
	</table>
</section>
