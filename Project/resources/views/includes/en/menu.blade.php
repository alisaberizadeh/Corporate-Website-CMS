@foreach ($menus as $menus_item)
    <li>
        <a href="/{{ $menus_item->link }}">{{ $menus_item->title }} @if ($menus_item->sub != null)
                <i style="font-size: 13px" class="fa fa-angle-down"></i>
            @endif
        </a>
        @if ($menus_item->sub != null)
            @if ($menus_item->count != null)
                @php
                    $count = $menus_item->count;
                @endphp
            @endif
            <ul class="sub-menu">
                @switch($menus_item->sub)
                    @case('Blog')
                        @if ($menus_item->count == null)
                            @php
                                $count = count($sub_blog);
                            @endphp
                        @endif
                        @for ($i = 0; $i < $count; $i++)
                            <li><a href="{{ route('en.single', $sub_blog[$i]->id) }}">{{ $sub_blog[$i]->name }}</a>
                            </li>
                        @endfor
                    @break

                    @case('Service')
                        @if ($menus_item->count == null)
                            @php
                                $count = count($sub_service);
                            @endphp
                        @endif
                        @for ($i = 0; $i < $count; $i++)
                            <li><a
                                    href="{{ route('en.services_single', $sub_service[$i]->id) }}">{{ $sub_service[$i]->name }}</a>
                            </li>
                        @endfor
                    @break

                    @case('Product')
                        @if ($menus_item->count == null)
                            @php
                                $count = count($sub_product);
                            @endphp
                        @endif
                        @for ($i = 0; $i < $count; $i++)
                            <li><a
                                    href="{{ route('en.product_single', $sub_product[$i]->id) }}">{{ $sub_product[$i]->title }}</a>
                            </li>
                        @endfor
                    @break

                    @case('Cat')
                        @if ($menus_item->count == null)
                            @php
                                $count = count($sub_cat);
                            @endphp
                        @endif
                        @for ($i = 0; $i < $count; $i++)
                            <li><a href="{{route('en.categorys.p',$sub_cat[$i]->id)}}">{{ $sub_cat[$i]->name }}</a></li>
                        @endfor
                    @break
                @endswitch
            </ul>
        @endif
    </li>
@endforeach

@if ($en == 1)
    <li><a href="/"><img src="{{ asset('/images/flag-fa.jpg') }}" style="width: 20px"
                alt="Persian"> Persian</a></li>
@endif
