<div wire:ignore>
    <iframe
        id="proposal-pdf-preview-{{ $proposal->id }}"
        src="{{ route('proposals.pdf', $proposal->id) }}"
        style="width: 100%; height: 100vh; border: none;"
        x-data
        @proposal-updated.window="
            // Refresh iframe with cache busting
            $el.src = '{{ route('proposals.pdf', $proposal->id) }}?refresh=' + Date.now();
        "
    ></iframe>
</div>