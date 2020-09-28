<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{url()->current()}}"
  },
  "headline": "{{$article->title}}",
  "image": ["https://hypnopedia.site/{{$article->cover_path}}"],
  "datePublished": "{{$article->created_at->toAtomString()}}",
  "dateModified": "{{$article->updated_at->toAtomString()}}",
  "author": {
    "@type": "Person",
    "name": "{{$article->user->name}}"
  },
   "publisher": {
    "@type": "Organization",
    "name": "LLC Pyrat",
    "logo": {
      "@type": "ImageObject",
      "url": "https://hypnopedia.site/images/logo-light.svg"
    }
  },
  "description": "{{$article->meta_desc}}"
}
</script>
