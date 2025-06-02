<table class="project-header table-borderless" cellspacing="0" cellpadding="0">
	<tr>
		<td style="width: 60%;">
			<div class="fw-bold text-lg uppercase">
				{{ $proposal->project_name }}, {{ $proposal->project_location }}
			</div>
			<div>
				<div class="fw-bold uppercase">SCHEDULE FOR INTERIOR FINISHES</div>
				<div class="fw-bold uppercase">PROJECT NUMBER: {{ $proposal->project_code }}</div>
				Date of Issue: {{ $proposal->issue_date->format('d F Y') }}
			</div>
		</td>
		<td style="text-align: right;">
			<img src="{{ public_path('storage/' . $company->logo_path) }}" alt="House of Elm Logo" style="width: 200px;">

		</td>
	</tr>
	<tr>
		<td class="text-sm uppercase" style="padding-top: 10px;" colspan="2">
			MUST BE OF CONTRACT QUALITY AND SUITABLE FOR COMMERCIAL USE, FABRICATION TO BE IN ACCORDANCE WITH HOUSE OF ELM
			PREAMBLES AND AS FOLLOWS:
		</td>
	</tr>
</table>
