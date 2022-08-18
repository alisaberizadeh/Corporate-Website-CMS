{{-- ------------------  Fav Icon --}}
@section('fav')
    {{ asset($fav) }}
@endsection

{{-- ------------------  Title --}}
@section('title', $title)

{{-- ------------------  logo1 --}}
@section('logo1', asset($logo1))

{{-- ------------------  logo1 --}}
@section('logo2', asset($logo2))
{{-- ------------------  footer logo --}}
@section('footer_logo', asset($logo1))


{{-- ------------------------- information --}}
@section('information')
    @foreach ($information as $information_item)
        @if ($information_item->status == 1)
            <li><a href="#"><i class="{{ $information_item->icon }}"></i>{{ $information_item->value }}</a></li>
        @endif
    @endforeach
@endsection

{{-- ----------------------- Information Footer --}}


@section('information_footer')
    @foreach ($information as $information_item)
        @if ($information_item->status == 1)
            <div class="footer-social-info">
                <p><span>{{ $information_item->name_fa }} : </span>{{ $information_item->value }}</p>
            </div>
        @endif
    @endforeach
@endsection


{{-- ------------------------- social --}}
@section('social')
    @foreach ($Social as $Social_item)
        @if ($Social_item->status == 1)
            <li><a href="{{ $Social_item->value }}"><i class="{{ $Social_item->icon }}"></i></a></li>
        @endif
    @endforeach
@endsection


{{-- ------------------------- social --}}
@section('social_footer')
    @foreach ($Social as $Social_item)
        @if ($Social_item->status == 1)
            <a href="{{ $Social_item->value }}"><i class="{{ $Social_item->icon }}"></i></a>
        @endif
    @endforeach
@endsection

@section('link_whatsapp')
       @if ($link_whatsapp->value != '')
          <a href="{{$link_whatsapp->value}}"><img class="send_whatsapp" src="{{asset('/images/whatsapp.png')}}" alt='WhatsApp'></a>
       @endif
@endsection

{{-- ------------------------- Blog Footer --}}
@section('blog_footer')
    @foreach ($blog_footer as $blog_footer_item)
        <div class="recent-post-item active pb-3">
            <div class="recent-post-image ml-3"><a href="#"><img width="80" height="80"
                        src="{{ asset($blog_footer_item->image) }}" alt=""></a></div>
            <div class="recent-post-text">
                <h6><a href="{{ route('en.single', $blog_footer_item->id) }}">{{ $blog_footer_item->name }} </a>
                </h6>
                <span class="rcomment">{{ $blog_footer_item->date }} </span>
            </div>
        </div>
    @endforeach
@endsection

{{-- ------------------------- text Footer --}}
@section('text_footer')
    <p>{{ $text_footer }}</p>
@endsection

{{-- -------------------------  copy text Footer --}}
@section('copy_text_footer')
    <p>{{ $copy_text_footer }}</p>
@endsection





@section('menu')
@include('includes.en.menu')
@endsection