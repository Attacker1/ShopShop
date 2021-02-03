<h2 class="section-title {!! isset($title) ? '' : 'link' !!} {!! $titleClasses or '' !!}">
  @if (isset($title))
    <span class="section-title__text">{!! $text or '' !!}</span>
  @else
    <a href="{!! $href or '#' !!}" class="section-title__link">{!! $text or '' !!}</a>
  @endif
</h2>
