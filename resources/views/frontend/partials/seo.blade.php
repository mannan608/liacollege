@php
    $seoTitle = optional($setting)->title ?? config('app.name', 'LIA - Leadership Institute Australia');
    $seoDescription = optional($setting)->description ?? 'Leadership Institute Australia';
    $seoKeywords = optional($setting)->keywords ? array_filter(array_map('trim', explode(',', optional($setting)->keywords))) : [];
    $seoUrl = url()->current();
    $seoImage = optional($setting)->logo ? asset('uploads/settings/' . $setting->logo) : asset('frontend/images/logo/logo.png');

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
@endphp

{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! TwitterCard::generate() !!}
{!! JsonLd::generate() !!}
