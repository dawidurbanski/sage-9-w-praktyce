<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">@title</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @content
  </div>
</article>
