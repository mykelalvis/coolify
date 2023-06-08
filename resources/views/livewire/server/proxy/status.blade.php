<div>
    @if ($server->settings->is_validated)
        <div wire:poll.10000ms="proxyStatus">
            @if ($server->extra_attributes->proxy_status === 'running')
                <x-status.running />
            @elseif ($server->extra_attributes->proxy_status === 'restarting')
                <x-status.restarting />
            @else
                <x-status.stopped />
            @endif
        </div>
    @endif
</div>