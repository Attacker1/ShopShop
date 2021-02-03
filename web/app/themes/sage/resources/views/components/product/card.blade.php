<div class="product-card" data-id="{!! $product->get_id() !!}">
  <div class="product-card__top">
    <a href="{{ get_the_permalink($product->get_id()) }}" class="product-card__images">
      <img class="product-card__image product-card__image-first"
           src="{{ wp_get_attachment_url($product->get_gallery_image_ids()[0]) }}"
           alt="{!! get_the_title() !!}">
      <img class="product-card__image product-card__image-second"
           src="{{ wp_get_attachment_url($product->get_gallery_image_ids()[1]) }}"
           alt="{!! get_the_title() !!}">
    </a>
    <div class="product-card__actions">
      <a href="?add_to_cart={{ $product->get_id() }}" class="product-card__add">
        Add to cart
      </a>
      <div class="product-card__icons">
        <a href="#" class="product-card__expand">
          @include('icon::expand')
        </a>
        <a href="#" class="product-card__wishlist">
          @include('icon::heart')
        </a>
      </div>
    </div>
  </div>
  <h3 class="product-card__name">
    <a href="{{ get_the_permalink($product->get_id()) }}">{!! get_the_title() !!}</a>
  </h3>
  <div class="product-card__rank"></div>
  <div class="product-card__price">{!! $product->get_price() !!} рублей</div>

</div>
