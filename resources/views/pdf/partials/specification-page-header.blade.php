<table class="table-borderless project-header">
	<tr>
		<td>
			<b class="fw-bold text-md uppercase">{{ $proposal->project_name }}, {{ $proposal->project_location }} <br>
				<div class="fw-bold text-sm uppercase">PROJECT NUMBER: {{ $proposal->project_code }}<br>SCHEDULE FOR INTERIOR
					FINISHES</div>
				<div class="text-sm"> Date of Issue: {{ $proposal->issue_date->format('d F Y') }}
				</div>
		</td>
		<td style="text-align: right;">
			<img src="{{ public_path('storage/' . $company->logo_path) }}" alt="House of Elm Logo" style="width: 200px;">
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
