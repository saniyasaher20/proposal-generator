<x-filament::page>
	<div class="flex justify-end mb-1">
		<a class="bg-primary-600 text-sm inline-block rounded px-2 py-1 text-white"
			href="{{ route('proposals.pdf', $record->id) }}" target="_blank">
			Download PDF
		</a>
	</div>

	<iframe src="{{ route('proposals.pdf', $record->id) }}" style="width: 100%; height: 100vh; border: none;"></iframe>
</x-filament::page>
