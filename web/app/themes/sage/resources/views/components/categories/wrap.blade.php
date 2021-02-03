@php
  $cats = get_terms( 'product_cat', [
    'orderby' => 'name',
    'order' => 'asc',
    'hide_empty' => true,
  ]);
@endphp

@foreach ($cats as $cat)
  @php
    $compare = '>=';
    $products = false;
    $now = date('Y-m-d H:i:s', time());
    $args = [
      'fields' => 'ids',
      'posts_per_page' => 6,
      'post_type' => 'product',
      'orderby' => 'desc',
      'tax_query' => [
        'relation' => 'AND',
        [
          'taxonomy' => 'product_cat',
          'field' => 'slug',
          'terms' => [$cat->slug],
          'operator' => 'AND',
        ],
      ],
    ];
    $query = new WP_Query( $args );
    $ids = $query->query($args);
    if($ids) {
      $products = wc_get_products([
        'include' => $ids,
      ]);
    }
  @endphp
  @if ($products)
    <section class="category-section">
      <div class="container container-big">
        @include('components.section-title.wrap', ['text' => $cat->name, 'href' => get_category_link($cat->term_id)])
        <div class="category-section__items">
          @foreach ($products as $product)
            @php setup_postdata($product); @endphp
            @include('components.product.card')
          @endforeach
          @php wp_reset_postdata() @endphp
        </div>
      </div>
    </section>
  @endif
@endforeach
