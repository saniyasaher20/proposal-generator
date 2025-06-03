<div style="position: absolute; bottom: 0; width: 100%;">
	<table class="parent-table table" cellpadding="10">
		<tr>
			<td style="text-align: right;" colspan="4">
				<div class="text-condensed text-xs" style="display: inline-block; border: 1px solid #000; padding: 0px 4px;">
					Note: Manufacturer to provide detailed <br> shop drawings prior to construction
				</div>
			</td>
		</tr>
		<tr>
			<td class="text-sm" style="text-align: center;padding:2px 0;" colspan="4">
				DESIGN DEVELOPMENT ONLY - NOT INTENDED FOR CONSTRUCTION
			</td>
		</tr>
		<tr>
			<td style="width: 10%;">
				<img class="logo" src="{{ public_path('storage/' . $company->logo_path) }}" alt="Company Logo"
					style="width:120px;">
				<br>
				<div class="text-condensed text-xs" >
					{{(e($company->address))}}
					{{-- {!! nl2br(e($company->address)) !!} --}}
				</div>
			</td>
			<td class="text-condensed">
				<div style="text-align:center; font-size:7px; border:1px solid black;padding: 2px;">
					HOUSE OF ELM TEMPLATE VERSION 2023
				</div>
				<div style="text-align: center; padding-top: 5px;">
					<u class="fw-semibold text-sm">ARCHITECT OF RECORD</u> <br>
					<div style="font-size:8px;">
						This drawing is a design development document. Site specific modifications made under the responsible charge of
						the architect and/or engineer of record will be required prior to using this document for bidding, permitting or
						construction.
					</div>
					<br>
				</div>
			</td>
			<td style="vertical-align: top; width: 30%;">
				<div class="text-condensed text-xs">PROJECT NAME:</div> <b>{{ $proposal->project_name }}</b> <br><br>
				<div class="text-condensed text-xs">ADDRESS:</div> <b>{{ $proposal->project_location }}</b> <br><br>
			</td>
			<td style="padding:0;">
				<table class="text-condensed table-project-info text-xs" style="padding: 10px 5px;width:100%;" cellspacing="0"
					cellpadding="0">
					<tr>
						<td><b>PROJECT #:</b></td>
						<td><b>{{ $proposal->project_code ?? '—' }}</b></td>
					</tr>
					<tr>
						<td>Issue date:</td>
						<td>{{ $proposal->issue_date ? \Carbon\Carbon::parse($proposal->issue_date)->format('d M Y') : '—' }}</td>
					</tr>
					<tr>
						<td>Studio principal:</td>
						<td>{{ $company->studio_principal_name }}</td>
					</tr>
					<tr>
						<td>Drawn by:</td>
						<td>{{ $company->drawn_by_name }}</td>
					</tr>
					<tr>
						<td>Checked by:</td>
						<td>{{ $company->checked_by_name }}</td>
					</tr>
					<tr>
						<td>Scale:</td>
						<td>{{ $proposal->scale ?? 'As shown' }}</td>
					</tr>
					<tr>
						<td colspan="2">
							<div style="border:1px solid black;padding:10px 5px;margin-top:5px;margin-left:-5px;">
								SHEET NUMBER: {{ $proposal->sheet_number ?? '—' }}
							</div>
							<br>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
