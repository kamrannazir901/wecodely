@props(['name', 'description', 'url', 'minPrice' => null, 'priceCurrency' => 'PKR'])

@php
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',

        'name' => $name,

        'description' => $description,

        'provider' => [
            '@type' => 'Organization',
            'name' => 'Wecodely',
            'url' => url('/'),
        ],

        'url' => $url,
    ];

    if (!is_null($minPrice)) {
        $data['offers'] = [
            '@type' => 'Offer',
            'url' => $url,
            'priceCurrency' => $priceCurrency,
            'priceSpecification' => [
                '@type' => 'UnitPriceSpecification',
                'priceCurrency' => $priceCurrency,
                'minPrice' => $minPrice,
            ],
        ];
    }
@endphp

<script type="application/ld+json">
    {!! json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
