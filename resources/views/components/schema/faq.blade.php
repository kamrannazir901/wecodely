@props([
    'faqs' => [],
])

@if (!empty($faqs))
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => collect($faqs)->map(fn($faq) => [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ])->values()->all(),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif
