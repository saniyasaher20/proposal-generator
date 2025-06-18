
	<section class="a4-size page-break">
		{{-- ITEM HEADER TABLE --}}
		<table class="equal-width table">
			<tr>
				{{-- Project / Location --}}
				<td>
					<span class="fw-bold text-sm">PROJECT:</span><br>
					<span class="fw-bold text-md">{{ $proposal->project_name }}, {{ $proposal->project_location }}</span>
				</td>

				{{-- Manufacturer's Details --}}
				<td>
					<span class="fw-bold text-sm">MANUFACTURER'S DETAILS:</span><br>
					<span class="fw-bold text-md">{{ $item->manufacturer_details }}</span>
				</td>

				{{-- Item Code --}}
				<td class="fw-bold text-md" style="text-align: center !important;">
					ITEM CODE:<br>
					<span class="text-md">{{ $item->item_code }}</span>
				</td>
			</tr>

			<tr>
				{{-- Item Name --}}
				<td>
					<span class="fw-bold text-sm">ITEM NAME:</span><br>
					<span class="text-md">{{ $item->item_name }}</span>
				</td>

				{{-- Description --}}
				<td>
					<span class="fw-bold text-sm">DESCRIPTION:</span><br>
					<span class="text-md">{{ $item->item_description }}</span>
				</td>

				{{-- Quantity --}}
				<td>
					<span class="fw-bold text-sm">TOTAL QUANTITY:</span><br>
					<span class="text-md">{{ $item->item_quantity }} nos</span>
				</td>
			</tr>

			<tr>
				{{-- Location / Section --}}
				<td>
					<span class="fw-bold text-sm">AREA/LOCATION:</span><br>
					<span class="text-md">{{ $item->location }}</span>
				</td>

				{{-- Product Code --}}
				<td>
					<span class="fw-bold text-sm">PRODUCT CODE:</span><br>
					<span class="text-md">{{ $item->product_code }}</span>
				</td>

				{{-- Revision --}}
				<td>
					<span class="fw-bold text-sm">REVISION:</span><br>
					<span class="text-md">{{ $item->revision }}</span>
				</td>
			</tr>

			<tr>
				<td class="fw-bold uppercase" style="border-bottom: none;" colspan="3">
					SKETCH / PHOTOS / MATERIAL / SWATCH REFERENCE / SPECIFICATIONS / NOTES
				</td>
			</tr>

			<tr>
				<td style="border-top: none;" colspan="3">
					<table class="table-borderless single-item-info-table" style="width: 100%; margin:0;padding:0;" cellpadding="0">
						{{-- INFO AND THUMBNAIL --}}
						<tr>
							{{-- Left: textual info (model, dimensions, etc.) --}}
							<td class="fw-bold" style="width: 50%; vertical-align: top; padding-right: 10px;" colspan="3">
								Model number: {{ $item->model_number }}<br>
								Model name: {{ $item->model_name }}<br>
								Width: {{ $item->item_width }} mm<br>
								Length: {{ $item->item_length }} mm<br>
								Height: {{ $item->item_height }} mm<br>
								Material: {{ $item->item_material }}<br>
								Details: {{ $item->item_details }}<br>
								Note: {{ $item->item_note }}
							</td>

							{{-- Right: thumbnail image --}}
							<td style="width: 40%; vertical-align: top; text-align: right;" rowspan="2">
								@if ($item->thumbnail_path)
									<img
										src="{{ $usePublicPath ? public_path('storage/' . $item->thumbnail_path) : asset('storage/' . $item->thumbnail_path) }}"
										alt="Furniture"
										style="max-height: 100%; max-width: 100%; width: 100%; object-fit: contain; border: 1px solid #ccc; padding: 2px; display: block; margin-left: auto;">
								@else
									{{-- If no thumbnail, you could leave an empty block or a placeholder --}}
									<div style="width: 100%; height: 100%; border: 1px solid #ccc; text-align: center; color: #999;">
										No Image
									</div>
								@endif
							</td>
						</tr>

						{{-- SWATCHES ROW --}}
						<tr>
							<td style="text-align: left;" colspan="3">
								@foreach ($item->swatches as $swatch)
									<div class="img-sm-wrapper">
										<div class="img-sm"
											style="
									 background: url('{{ $usePublicPath ? public_path('storage/' . $swatch->image_path) : asset('storage/' . $swatch->image_path) }}') center center/cover no-repeat;">
										</div>
										<div style="font-size: 12px; margin-top: 1px;">{{ $swatch->name }}<br>{{ $swatch->code }}</div>
									</div>
									<div class="spacer"></div> <!-- spacer -->
								@endforeach
							</td>
						</tr>

						{{-- GENERAL NOTES (Company-level) --}}
						<tr>
							<td class="text-condensed text-sm" colspan="4">
								<div class="fw-bold uppercase">GENERAL NOTES:</div>
								@if ($company->general_notes)
									{{-- If general_notes contains line breaks, convert them to <br> --}}
									{!! nl2br(e($company->general_notes)) !!}
								@else
									<div>-</div>
								@endif
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		{{-- CONTACT & REMARKS TABLE --}}
		<table class="table">
			<tr>
				{{-- Left: Contact info --}}
				<td class="text-sm" style="width: 60%; border-top: none;">
					<div><span class="fw-bold uppercase">CONTACT PERSON:</span> {{ $company->contact_name }}</div>
					<div><span class="fw-bold uppercase">TELEPHONE:</span> {{ $company->contact_number }}</div>
					<div><span class="fw-bold uppercase">FACSIMILE:</span> {{ $company->facsimile }}</div>
					<div><span class="fw-bold uppercase">E-MAIL:</span>
						@if (!empty($company->emails) && isset($company->emails[0]))
							<a href="mailto:{{ $company->emails[0] }}">{{ $company->emails[0] }}</a>
						@endif
					</div>
					<div><span class="fw-bold uppercase">WEBSITE:</span> {{ $company->website }}</div>
				</td>

				{{-- Right: Static “Required Items” --}}
				<td style="border-top: none; vertical-align: top;">
					<div class="fw-bold text-sm uppercase">REQUIRED ITEMS FOR DESIGN APPROVAL PRIOR TO FABRICATION:</div>
					<ul class="list-disc pl-5 text-sm">
						{{--* tailwind classes only works in html preview , and not in dompdf --}}
						<li>Shop Drawing</li>
						<li>Finish Sample</li>
						<li>Prototype</li>
					</ul>
				</td>
			</tr>

			<tr>
				{{-- Bottom: Company-level “Remarks” --}}
				<td class="text-condensed text-xs" colspan="2">
					<div class="fw-bold uppercase">REMARKS:</div>
					@if ($company->remarks)
						{!! nl2br(e($company->remarks)) !!}
					@else
						<div>-</div>
					@endif
				</td>
			</tr>
		</table>
	</section>


