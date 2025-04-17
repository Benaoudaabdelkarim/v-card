<span>
    @if ($row->net_price)
        {{ $row->currency->currency_icon }} {{ $row->net_price }}
    @else
        N/A
    @endif

</span>
