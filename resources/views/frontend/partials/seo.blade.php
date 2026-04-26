@php
    use App\Models\SeoMeta;

    // Get current path for SEO lookup
    $currentPath = request()->path() === '/' ? '/' : request()->path();

    // Try to find SEO meta for current path
    $seoMeta = SeoMeta::getForPath($currentPath);

    // Fallback to global settings if no page-specific SEO
    $seoTitle = $seoMeta?->meta_title ?? optional($setting)->title ?? config('app.name', 'LIA - Leadership Institute Australia');
    $seoDescription = $seoMeta?->meta_description ?? optional($setting)->description ?? 'Leadership Institute Australia';
    $seoKeywords = $seoMeta ? $seoMeta->getKeywordsArray() : (optional($setting)->keywords ? array_filter(array_map('trim', explode(',', optional($setting)->keywords))) : []);
    $seoUrl = $seoMeta?->canonical_url ?? url()->current();
    $seoImage = $seoMeta?->og_image ? asset('uploads/seo/' . $seoMeta->og_image) : (optional($setting)->logo ? asset('uploads/settings/' . $setting->logo) : asset('frontend/images/logo/logo.png'));

    SEOMeta::setTitle($seoTitle);
    SEOMeta::setDescription($seoDescription);
    SEOMeta::setCanonical($seoUrl);

    if (!empty($seoKeywords)) {
        SEOMeta::setKeywords($seoKeywords);
    }

    OpenGraph::setTitle($seoTitle);
    OpenGraph::setDescription($seoDescription);
    OpenGraph::setUrl($seoUrl);
    OpenGraph::setSiteName(optional($setting)->title ?? config('app.name'));
    OpenGraph::setType('website');
    OpenGraph::addImage($seoImage);

    TwitterCard::setTitle($seoTitle);
    TwitterCard::setDescription($seoDescription);
    TwitterCard::setSite(optional($setting)->twitter ?? '@LeadershipAus');
    TwitterCard::setUrl($seoUrl);
    TwitterCard::setImage($seoImage);

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
{!! TwitterCard::generate() !!}
{!! JsonLd::generate() !!}
@if($seoMeta?->schema_markup)
    {!! JsonLdMulti::generate() !!}
@endif
