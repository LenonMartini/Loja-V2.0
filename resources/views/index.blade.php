@extends('layouts.template')

@section('content_product')
    <div class="row">
        @foreach($products as $item)
            <div class="col-md-3 mb-2">
                <div class="card product_item">
                
                    <div class="card-body">
                        <a href="">

                            <div class="product_tags">
                                @if($item['product_sale'] == '1')
                                    <div class="product_tag product_tag_red">@lang('pt-br.sale')</div>
                                @endif
                                @if($item['product_bestseller'] == '1')
                                    <div class="product_tag product_tag_green">@lang('pt-br.bestseller')</div>
                                @endif    
                                @if($item['new_product'] == '1')
                                    <div class="product_tag product_tag_blue">@lang('pt-br.new')</div>
                                @endif
                            </div>
                            <div class="product_image d-flex justify-content-center">
                                <img src="{{asset('medias/products')}}/{{$item['images'][0]['url']}}" width="100%" />
                                             
                             
                            </div>
                            <div class="product_name"> {{$item['product_name']}}</div>
                            <div class="product_brand">{{$item['brand_name']}}</div>
                            <div class="product_price_from">
                                @if($item['product_price_from'] != '0')
                                     R$ {{ number_format($item['product_price_from'], 2, ',', '.') }}
                                @endif 
                            </div>
                            <div class="product_price">
                                R$ {{ number_format($item['product_price'], 2, ',', '.')}}
                            </div>
                            <div class="clear:both"></div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach   
        
    </div> 
    <nav aria-label="Page navigation example mt-5">
        {{$products->links()}}    
    </nav>
@endsection