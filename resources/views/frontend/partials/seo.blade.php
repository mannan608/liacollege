@php
    use App\Models\SeoMeta as SeoMetaModel;

    // Get current path for SEO lookup
    $currentPath = request()->path() === '/' ? '/' : request()->path();

    $publicScheme = request()->headers->get('x-forwarded-proto', request()->getScheme());
    $publicScheme = trim(explode(',', $publicScheme)[0]);
    $publicHost = request()->headers->get('x-forwarded-host', request()->getHost());
    $publicHost = trim(explode(',', $publicHost)[0]);

    if (in_array($publicHost, ['127.0.0.1', 'localhost'], true)) {
        $configuredUrl = parse_url(config('app.url'));
        $publicScheme = $configuredUrl['scheme'] ?? 'https';
        $publicHost = $configuredUrl['host'] ?? $publicHost;
    }

    $publicBaseUrl = $publicScheme . '://' . $publicHost;
    $publicPath = request()->path() === '/' ? '' : '/' . ltrim(request()->path(), '/');
    $publicCurrentUrl = $publicBaseUrl . $publicPath;

    // Try to find SEO meta for current path
    $seoMeta = SeoMetaModel::getForPath($currentPath);

    // Fallback to global settings if no page-specific SEO
    $siteName = optional($setting)->title ?? config('seotools.meta.defaults.title', 'Leadership Institute Australia');
    $seoTitle = $seoMeta?->meta_title ?? $siteName;
    $seoDescription = $seoMeta?->meta_description ?? optional($setting)->description ?? 'Leadership Institute Australia';
    $seoKeywords = $seoMeta ? $seoMeta->getKeywordsArray() : (optional($setting)->keywords ? array_filter(array_map('trim', explode(',', optional($setting)->keywords))) : []);
    $seoUrl = $seoMeta?->canonical_url ?: $publicCurrentUrl;
    $seoUrlHost = parse_url($seoUrl, PHP_URL_HOST);
    if (in_array($seoUrlHost, ['127.0.0.1', 'localhost'], true)) {
        $seoUrl = $publicCurrentUrl;
    }

    $seoImage = $seoMeta?->og_image ? $publicBaseUrl . '/uploads/seo/' . $seoMeta->og_image : (optional($setting)->logo ? $publicBaseUrl . '/uploads/settings/' . $setting->logo : $publicBaseUrl . '/frontend/images/logo/logo.png');
    $seoImageExtension = strtolower(pathinfo(parse_url($seoImage, PHP_URL_PATH) ?? '', PATHINFO_EXTENSION));
    $seoImageType = [
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'webp' => 'image/webp',
        'gif' => 'image/gif',
    ][$seoImageExtension] ?? 'image/png';

    SEOMeta::setTitle($seoTitle);
    SEOMeta::setDescription($seoDescription);
    SEOMeta::setCanonical($seoUrl);

    if (!empty($seoKeywords)) {
        SEOMeta::setKeywords($seoKeywords);
    }

    OpenGraph::setTitle($seoTitle);
    OpenGraph::setDescription($seoDescription);
    OpenGraph::setUrl($seoUrl);
    OpenGraph::setSiteName($siteName);
    OpenGraph::setType('website');
    OpenGraph::addImage($seoImage, [
        'secure_url' => $seoImage,
        'type' => $seoImageType,
        'width' => 1200,
        'height' => 630,
        'alt' => $seoTitle,
    ]);

    Twitter::setType('summary_large_image');
    Twitter::setTitle($seoTitle);
    Twitter::setDescription($seoDescription);
    Twitter::setSite(optional($setting)->twitter ?? '@LeadershipAus');
    Twitter::setUrl($seoUrl);
    Twitter::setImage($seoImage);

    JsonLd::setTitle($seoTitle);
    JsonLd::setDescription($seoDescription);
    JsonLd::setType('WebPage');
    JsonLd::setUrl($seoUrl);
    JsonLd::addImage($seoImage);

    // Add custom schema markup if provided
    if ($seoMeta?->schema_markup) {
        JsonLdMulti::newJsonLd();
        JsonLdMulti::setJsonLd($seoMeta->schema_markup);
    }
@endphp

{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
{!! JsonLd::generate() !!}
@if($seoMeta?->schema_markup)
    {!! JsonLdMulti::generate() !!}
@endif
